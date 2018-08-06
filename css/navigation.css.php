<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Navigation styles for the pmahomme theme
 *
 * @package    PhpMyAdmin-theme
 * @subpackage PMAHomme
 */

// unplanned execution path
if (!defined('PMA_MINIMUM_COMMON') && !defined('TESTSUITE')) {
	exit();
}
?>



@import url('https://fonts.googleapis.com/css?family=Roboto|Lato:700');

/* PAGE HOME */

#tableslistcontainer::-webkit-scrollbar-track{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #F5F5F5;
	border-radius: 5px;
}

#tableslistcontainer::-webkit-scrollbar{
	width: 10px;
	background-color: #F5F5F5;
	border-radius: 5px;
}

#tableslistcontainer::-webkit-scrollbar-thumb{
	background-color: #3498db;
	border-radius: 5px;
}

#tableslistcontainer {
	width: 73vw !important;
	overflow-x: scroll !important;
	padding-top: 20px;
	padding-bottom: 20px;
}

#tableslistcontainer #tableFilter{
	width: 100%;
	border: none;
	border-radius: 5px;
	margin: 0;
	background-color: #3498db;
	color: #fff;
	font-size: 17px;
	font-weight: normal;
	font-family: 'Roboto', sans-serif;
	box-shadow: none;
}

input{
	border-radius: 3px !important;
	background: #fff !important;
	border: 0 !important;
	padding: 10px !important;
	transition: all 1s ease !important;
}

input:hover{
	transition: all 1s ease !important;
	box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23) !important;
}

input[type=submit]{
	background: #2c3e50 !important;
	color: #fff !important;
}

#serverinfo{
	background-color: #34495e;
	padding: 20px;
	font-size: 17px;
}

#serverinfo .icon{
	margin-left: 40px;
}

#serverinfo a{
	text-decoration: none;
	font-size: 17px;
	color: #fff;
	margin-left: 15px;
}

select{
	border-radius: 3px;
}

#page_content{
    background: #ecf0f1 !important;
    padding: 20px !important;
}

#main_pane_left>.group,
#main_pane_right>.group{
    border: 0;
    border-radius: 5px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
}

div.group>h2{
    background: #3498db !important;
    padding: 10px;
    font-size: 17px;
    border: 0;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    text-shadow: 2px 4px 3px rgba(0,0,0,0.3);
    text-align: center;
}
/******************************************************************************/
/* Navigation */

#pmalogo{
    margin: 30px;
}

#pmalogo img{
	width: 90%;
	height: 40px;
}

#pmalogo a {
	color: #ecf0f1;
	font-family: 'Roboto', sans-serif !important;
	text-decoration: none !important;
	display: flex;
	justify-content: center;
	align-items: center;
}

#pmalogo a::after{
	content: 'V3.0';
	width: 60px;
	height: 60px;
	font-size: 20px;
}

#pma_recent_list, #pma_favorite_list{ margin-top: 10px !important; }

#pma_recent_list a,
#pma_recent_list li,
#pma_recent_list,
#pma_favorite_list
 {
	background-color: #34495e !important;
	color: #fff !important;
}


#pma_recent_list li, #pma_favorite_list{
	padding: 5px !important;
}


#pma_navigation {
    width: <?php echo $GLOBALS['cfg']['NaviWidth']; ?>px;
    position: fixed;
    top: 0;
    <?php echo $left; ?>: 0;
    height: 100%;
    background: #16a085;
    color: #fff;
    z-index: 800;
}

#navipanellinks{
	display: flex !important;
	justify-content: space-around !important;
	align-items: center !important;
	padding: 20px!important;
}

.drop_list span{
	background-color: #34495e !important;
	padding: 6px !important;
	color: #fff !important;
	border: 0 !important;
	border-radius: 5px;
}

#pma_navigation_collapser{
	margin: 15px!important;
	background: #ecf0f1!important;
	border-radius: 100%!important;
	height: 30px!important;
	width: 30px!important;
	color: #2c3e50!important;
	border: 0!important;
	font-weight: bold!important;
	display: flex;
	align-items: center;
	justify-content: center;
	font-size: 20px;
}

#page_nav_icons{
	height: 40px;
	width: 40px;
	border-bottom-left-radius: 5px;
	display: flex;
	justify-content: center;
	align-items: center;
}

#page_nav_icons,
#page_nav_icons>*{
	background-color: #fff !important;
}

#pma_navigation_header {
    overflow: hidden;
}

#pma_navigation_content {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    <?php echo $left; ?>: 0;
    z-index: 0;
}

#pma_navigation ul {
    margin: 0;
}

#pma_navigation form {
    margin: 0;
    padding: 0;
    display: inline;
}

#pma_navigation select#select_server,
#pma_navigation select#lightm_db {
    width: 100%;
}

/******************************************************************************/
/* specific elements */

#pma_navigation div.pageselector {
    text-align: center;
    margin: 0;
    margin-<?php echo $left; ?>: 0.75em;
    border-<?php echo $left; ?>: 1px solid #666;
}

#pma_navigation div#pmalogo {
    margin: 30px;
}

#pma_navigation #pmalogo,
#pma_navigation #serverChoice,
#pma_navigation #navipanellinks,
#pma_navigation #recentTableList,
#pma_navigation #favoriteTableList,
#pma_navigation #databaseList,
#pma_navigation div.pageselector.dbselector {
    text-align: center;
    padding: 5px 10px 0;
    border: 0;
}

#pma_navigation #recentTable,
#pma_navigation #favoriteTable {
    width: 200px;
}

#pma_navigation #favoriteTableList select,
#pma_navigation #serverChoice select
 {
    width: 80%;
}

#pma_navigation_content > img.throbber {
    display: none;
    margin: .3em auto 0;
}

/* Navigation tree*/
#pma_navigation_tree {
    margin: 0;
    margin-<?php echo $left; ?>: 5px;
    overflow: hidden;
    color: #444;
    height: 74%;
    position: relative;
}
#pma_navigation_select_database {
    text-align: left;
    padding: 0 0 0;
    border: 0;
    margin: 0;
}

#pma_navigation_db_select {
    margin-top: 0.5em;
    margin-<?php echo $left; ?>: 0.75em;
}
#pma_navigation_db_select select {
    background: url("./themes/pmahomme/img/select_bg.png") repeat scroll 0 0;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    border: 1px solid #bbb;
    border-top: 1px solid #bbb;
    color: #333;
    padding: 4px 6px;
    margin: 0 0 0;
    width: 92%;
    font-size: 1.11em;
}

#pma_navigation_tree_content {
    width: 100%;
    overflow: hidden;
    overflow-y: auto;
    position: absolute;
    height: 100%;
}
#pma_navigation_tree_content a.hover_show_full {
    position: relative;
    z-index: 100;
    color: #fff;
}
#pma_navigation_tree a {
    color: <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
}
#pma_navigation_tree a:hover {
    text-decoration: none;
}
#pma_navigation_tree li.database{
    padding-top: 3px;
    padding-bottom: 3px;
    border-bottom: 2px solid transparent;
    transition: all 1s ease;
    font-family: 'Roboto', sans-serif;
    font-size: 15px;
    font-weight: normal;
}
#pma_navigation_tree li.database.activePointer {
    background: #1abc9c;
    transition: all 1s ease;
}
#pma_navigation_tree li.selected {
    color: <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
    background-color: <?php echo $GLOBALS['cfg']['NaviPointerBackground']; ?>;
}
#pma_navigation_tree li .dbItemControls {
    padding-left: 4px;
}
#pma_navigation_tree li .navItemControls {
    display: none;
    padding-left: 4px;
}
#pma_navigation_tree li.activePointer .navItemControls {
    display: inline;
    opacity: 0.5;
}
#pma_navigation_tree li.activePointer .navItemControls:hover {
    display: inline;
    opacity: 1.0;
}
#pma_navigation_tree ul {
    clear: both;
    padding: 0;
    list-style-type: none;
    margin: 0;
}
#pma_navigation_tree ul ul {
    position: relative;
}
#pma_navigation_tree li,
#pma_navigation_tree li.fast_filter {
    white-space: nowrap;
    clear: both;
    min-height: 16px;
}
#pma_navigation_tree img {
    margin: 0;
}
#pma_navigation_tree i {
    display: block;
}
#pma_navigation_tree div.block {
    position: relative;
    width: 1.5em;
    height: 1.5em;
    min-width: 16px;
    min-height: 16px;
    float: <?php echo $left; ?>;
}
#pma_navigation_tree div.block.double {
    width: 2.5em;
}
#pma_navigation_tree div.block i,
#pma_navigation_tree div.block b {
    width: 1.5em;
    height: 1.7em;
    min-width: 16px;
    min-height: 8px;
    position: absolute;
    bottom: 0.7em;
    <?php echo $left; ?>: 0.75em;
    z-index: 0;
}
#pma_navigation_tree div.block i { /* Top and right segments for the tree element connections */
    display: block;
    border-<?php echo $left; ?>: 1px solid #2c3e50;
    border-bottom: 1px solid #2c3e50;
    position: relative;
    z-index: 0;
}
#pma_navigation_tree div.block i.first { /* Removes top segment */
    border-<?php echo $left; ?>: 0;
}
#pma_navigation_tree div.block b { /* Bottom segment for the tree element connections */
    display: block;
    height: 0.75em;
    bottom: 0;
    <?php echo $left; ?>: 0.75em;
    border-<?php echo $left; ?>: 1px solid #666;
}
#pma_navigation_tree div.block a,
#pma_navigation_tree div.block u {
    position: absolute;
    <?php echo $left; ?>: 50%;
    top: 50%;
    z-index: 10;
}
#pma_navigation_tree div.block a + a {
    <?php echo $left; ?>: 100%;
}
#pma_navigation_tree div.block.double a,
#pma_navigation_tree div.block.double u {
    <?php echo $left; ?>: 33%;
}
#pma_navigation_tree div.block.double a + a {
    <?php echo $left; ?>: 85%;
}
#pma_navigation_tree div.block img {
    position: relative;
    top: -0.6em;
    <?php echo $left; ?>: 0;
    margin-<?php echo $left; ?>: -7px;
}
#pma_navigation_tree div.throbber img {
    top: 2px;
    <?php echo $left; ?>: 2px;
}
#pma_navigation_tree li.last > ul {
    background: none;
}
#pma_navigation_tree li > a, #pma_navigation_tree li > i {
    line-height: 1.5em;
    height: 1.5em;
    padding-<?php echo $left; ?>: 0.3em;
}
#pma_navigation_tree .list_container {
    border-<?php echo $left; ?>: 1px solid #666;
    margin-<?php echo $left; ?>: 0.75em;
    padding-<?php echo $left; ?>: 0.75em;
}
#pma_navigation_tree .last > .list_container {
    border-<?php echo $left; ?>: 0 solid #666;
}

/* Fast filter */
li.fast_filter {
    padding-<?php echo $left; ?>: 0.75em;
    margin-<?php echo $left; ?>: 0.75em;
    padding-<?php echo $right; ?>: 35px;
    border-<?php echo $left; ?>: 1px solid #666;
    list-style: none;
}
li.fast_filter input {
    margin: 3px 0 0 0;
    font-size: 0.7em;
    padding-top: 2px;
    padding-bottom: 2px;
    padding-<?php echo $left; ?>: 4px;
    padding-<?php echo $right; ?>: 1.7em;
    width: 100%;
}
li.fast_filter span {
    position: relative;
    <?php echo $right; ?>: 1.5em;
    padding: 0.2em;
    cursor: pointer;
    font-weight: bold;
    color: #800;
    font-size: 0.7em;
}
/* IE10+ has its own reset X */
html.ie li.fast_filter span {
    display: none;
}
html.ie.ie9 li.fast_filter span,
html.ie.ie8 li.fast_filter span {
    display: auto;
}
html.ie li.fast_filter input {
    padding-<?php echo $right; ?>: .2em;
}
html.ie.ie9 li.fast_filter input,
html.ie.ie8 li.fast_filter input {
    padding-<?php echo $right; ?>: 1.7em;
}
li.fast_filter.db_fast_filter {
    border: 0;
    margin-left: 0;
    margin-right: 10px;
}

#navigation_controls_outer {
    min-height: 21px !important;
}

#navigation_controls_outer.activePointer {
    background-color: transparent !important;
}

#navigation_controls {
    float: right;
    padding-right: 23px;
}

/* Resize handler */
#pma_navigation_resizer {
    width: 3px;
    height: 100%;
    background-color: #aaa;
    cursor: col-resize;
    position: fixed;
    top: 0;
    <?php echo $left; ?>: 240px;
    z-index: 801;
}
#pma_navigation_collapser {
    width: 20px;
    height: 22px;
    line-height: 22px;
    background: #eee;
    color: #555;
    font-weight: bold;
    position: fixed;
    top: 0;
    <?php echo $left; ?>: <?php echo $GLOBALS['cfg']['NaviWidth']; ?>px;
    text-align: center;
    cursor: pointer;
    z-index: 800;
    text-shadow: 0 1px 0 #fff;
    filter: dropshadow(color=#fff, offx=0, offy=1);
    border: 1px solid #888;
}

/* Quick warp links */
.pma_quick_warp {
    margin-top: 5px;
    margin-<?php echo $left; ?>: 2px;
    position: relative;
}
.pma_quick_warp .drop_list {
    float: <?php echo $left; ?>;
    margin-<?php echo $left; ?>: 3px;
    padding: 2px 0;
}
.pma_quick_warp .drop_button {
    padding: 0 .3em;
    border: 1px solid #ddd;
    border-radius: .3em;
    background: #f2f2f2;
    cursor: pointer;
}
.pma_quick_warp .drop_list:hover .drop_button {
    background: #fff;
}
.pma_quick_warp .drop_list ul {
    position: absolute;
    margin: 0;
    padding: 0;
    overflow: hidden;
    overflow-y: auto;
    list-style: none;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: .3em;
    border-top-<?php echo $right; ?>-radius: 0;
    border-bottom-<?php echo $right; ?>-radius: 0;
    box-shadow: 0 0 5px #ccc;
    top: 100%;
    <?php echo $left; ?>: 3px;
    <?php echo $right; ?>: 0;
    display: none;
    z-index: 802;
}
.pma_quick_warp .drop_list:hover ul {
    display: block;
}
.pma_quick_warp .drop_list li {
    white-space: nowrap;
    padding: 0;
    border-radius: 0;
}
.pma_quick_warp .drop_list li img {
    vertical-align: sub;
}
.pma_quick_warp .drop_list li:hover {
    background: #f2f2f2;
}
.pma_quick_warp .drop_list a {
    display: block;
    padding: .2em .3em;
}
.pma_quick_warp .drop_list a.favorite_table_anchor {
    clear: left;
    float: left;
    padding: .1em .3em 0;
}
