<?php
/**
 * Elgg Messageboard CSS view
 * 
 */

?>

/*<style>*/

.instagram-list img {
    width: 100%;
}
.instagram-list li {
    float: left;
    width: 32.1%;
    margin-right: 5px;
}
.instagram-list li:nth-child(3n) {
    margin-right: 0;
}
.instagram-list .ig-1 {
    width: 100%;
    margin-right: 0;
}
.ig-main {
    width: 100%;
}
.ig-meta {
    margin-top: 10px;
    margin-bottom: 10px;
    overflow: auto;
}
.ig-meta li {
    float: left;
    margin-right: 20px;
}
.ig-meta li:last-child {
    margin: 0;
}
.ig-meta i {
    margin-right: 5px;
    color: #60B8F7;
}
.ig-colorbox #cboxTopLeft, 
.ig-colorbox #cboxTopCenter, 
.ig-colorbox #cboxTopRight,
.ig-colorbox #cboxMiddleLeft,
.ig-colorbox #cboxMiddleRight,
.ig-colorbox #cboxBottomLeft,
.ig-colorbox #cboxBottomCenter,
.ig-colorbox #cboxBottomRight {
    display: none;
}
#cboxOverlay.ig-colorbox {
    background-color: black;
}
.ig-colorbox #cboxClose {
    padding: 20px;
}
.ig-user img {
    width: 30px;
    border-radius: 50%;
    border: 1px solid #ccc;
}
.ig-user span {
    position: relative;
    top: -11px;
}
.ig-caption {
    display: block;
}