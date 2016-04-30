'use strict';

module.exports = CollisionFeature;

/**
 * A CollisionFeature represents the area of the tile covered by a single label.
 * It is used with CollisionTile to check if the label overlaps with any
 * previous labels. A CollisionFeature is mostly just a set of CollisionBox
 * objects.
 *
 * @class CollisionFeature
 * @param {Array<Point>} line The geometry the label is placed on.
 * @param {Anchor} anchor The point along the line around which the label is anchored.
 * @param {VectorTileFeature} feature The VectorTileFeature that this CollisionFeature was created for.
 * @param {Array<string>} layerIDs The IDs of the layers that this CollisionFeature is a part of.
 * @param {Object} shaped The text or icon shaping results.
 * @param {number} boxScale A magic number used to convert from glyph metrics units to geometry units.
 * @param {number} padding The amount of padding to add around the label edges.
 * @param {boolean} alignLine Whether the label is aligned with the line or the viewport.
 *
 * @private
 */
function CollisionFeature(collisionBoxArray, line, anchor, featureIndex, sourceLayerIndex, bucketIndex, shaped, boxScale, padding, alignLine, straight) {

    var y1 = shaped.top * boxScale - padding;
    var y2 = shaped.bottom * boxScale + padding;
    var x1 = shaped.left * boxScale - padding;
    var x2 = shaped.right * boxScale + padding;

    this.boxStartIndex = collisionBoxArray.length;

    if (alignLine) {

        var height = y2 - y1;
        var length = x2 - x1;

        if (height > 0) {
            // set minimum box height to avoid very many small labels
            height = Math.max(10 * boxScale, height);

            if (straight) {
                // used for icon labels that are aligned with the line, but don't curve along it
                var vector = line[anchor.segment + 1].sub(line[anchor.segment])._unit()._mult(length);
                var straightLine = [anchor.sub(vector), anchor.add(vector)];
                this._addLineCollisionBoxes(collisionBoxArray, straightLine, anchor, 0, length, height, featureIndex, sourceLayerIndex, bucketIndex);
            } else {
                // used for text labels that curve along a line
                this._addLineCollisionBoxes(collisionBoxArray, line, anchor, anchor.segment, length, height, featureIndex, sourceLayerIndex, bucketIndex);
            }
        }

    } else {
        collisionBoxArray.emplaceBack(anchor.x, anchor.y, x1, y1, x2, y2, Infinity, featureIndex, sourceLayerIndex, bucketIndex,
                0, 0, 0, 0, 0);
    }

    this.boxEndIndex = collisionBoxArray.length;
}

/**
 * Create a set of CollisionBox objects for a line.
 *
 * @param {Array<Point>} line
 * @param {Anchor} anchor
 * @param {number} labelLength The length of the label in geometry units.
 * @param {Anchor} anchor The point along the line around which the label is anchored.
 * @param {VectorTileFeature} feature The VectorTileFeature that this CollisionFeature was created for.
 * @param {number} boxSize The size of the collision boxes that will be created.
 *
 * @private
 */
CollisionFeature.prototype._addLineCollisionBoxes = function(collisionBoxArray, line, anchor, segment, labelLength, boxSize, featureIndex, sourceLayerIndex, bucketIndex) {
    var step = boxSize / 2;
    var nBoxes = Math.floor(labelLength / step);

    // offset the center of the first box by half a box so that the edge of the
    // box is at the edge of the label.
    var firstBoxOffset = -boxSize / 2;

    var bboxes = this.boxes;

    var p = anchor;
    var index = segment + 1;
    var anchorDistance = firstBoxOffset;

    // move backwards along the line to the first segment the label appears on
    do {
        index--;

        // there isn't enough room for the label after the beginning of the line
        // checkMaxAngle should have already caught this
        if (index < 0) return bboxes;

        anchorDistance -= line[index].dist(p);
        p = line[index];
    } while (anchorDistance > -labelLength / 2);

    var segmentLength = line[index].dist(line[index + 1]);

    for (var i = 0; i < nBoxes; i++) {
        // the distance the box will be from the anchor
        var boxDistanceToAnchor = -labelLength / 2 + i * step;

        // the box is not on the current segment. Move to the next segment.
        while (anchorDistance + segmentLength < boxDistanceToAnchor) {
            anchorDistance += segmentLength;
            index++;

            // There isn't enough room before the end of the line.
            if (index + 1 >= line.length) return bboxes;

            segmentLength = line[index].dist(line[index + 1]);
        }

        // the distance the box will be from the beginning of the segment
        var segmentBoxDistance = boxDistanceToAnchor - anchorDistance;

        var p0 = line[index];
        var p1 = line[index + 1];
        var boxAnchorPoint = p1.sub(p0)._unit()._mult(segmentBoxDistance)._add(p0)._round();

        var distanceToInnerEdge = Math.max(Math.abs(boxDistanceToAnchor - firstBoxOffset) - step / 2, 0);
        var maxScale = labelLength / 2 / distanceToInnerEdge;

        collisionBoxArray.emplaceBack(boxAnchorPoint.x, boxAnchorPoint.y,
                -boxSize / 2, -boxSize / 2, boxSize / 2, boxSize / 2, maxScale,
                featureIndex, sourceLayerIndex, bucketIndex,
                0, 0, 0, 0, 0);
    }

    return bboxes;
};
