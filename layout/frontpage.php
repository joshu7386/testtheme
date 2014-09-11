<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package   theme_testtheme
 * @copyright 2013 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
*/

$left = (!right_to_left());  // To know if to add 'pull-right' and 'desktop-first-column' classes in the layout for LTR.
echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?> id="pediatric">
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,700,800' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>

<body <?php echo $OUTPUT->body_attributes('two-column'); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

    <header role="banner" id="header-wrap" class="navbar navbar-fixed-top">
        <div class="container">
            <div id="brand">
                <div id="logo">
                    <a href="<?php echo $CFG->wwwroot;?>"><img src="<?php echo $OUTPUT->pix_url('logo', 'theme'); ?>" alt="MABTS Logo"></a>
                </div>
            </div>
            <nav role="navigation" class="navbar-inner">
                <div class="navbar-wrap">
                    <a class="btn btn-navbar" data-toggle="workaround-collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                            <li class="navbar-text"><?php echo $OUTPUT->login_info() ?></li>
                        </ul>
                        <div id="tabs">
                            <?php echo $OUTPUT->custom_menu(); ?>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

	<div id="banner-wrap">
		<div id="banner" class="container">
			<div id="main-image">
					<img src="<?php echo $OUTPUT->pix_url('professor', 'theme'); ?>" alt="Front Page Image">
			</div>
		</div>
	</div>
	
    <div id="page-wrap">
        <div id="page" class="container">
            <header id="page-header" class="clearfix">
                <div id="page-navbar" class="clearfix">
                    <nav class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></nav>
                    <div class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></div>
                </div>
                <?php echo $OUTPUT->page_heading(); ?>
                <div id="course-header">
                    <?php echo $OUTPUT->course_header(); ?>
                </div>
            </header>
            <div id="page-content">
                <div id="action-blocks-wrap">
                    <div id="action-blocks" class="row-fluid">
                        <?php echo $OUTPUT->blocks('block-one', 'span4'); ?>
                        <?php echo $OUTPUT->blocks('block-two', 'span4'); ?>
                        <?php echo $OUTPUT->blocks('block-three', 'span4'); ?>
                    </div>
                </div>
                <div class="row-fluid">
                    <section id="region-main" class="span9<?php if ($left) { echo ' pull-right'; } ?>">
                        <?php
                        echo $OUTPUT->course_content_header();
                        echo $OUTPUT->main_content();
                        echo $OUTPUT->course_content_footer();
                        ?>
                    </section>
                    <?php
                    $classextra = '';
                    if ($left) {
                        $classextra = ' desktop-first-column';
                    }
                    echo $OUTPUT->blocks('side-pre', 'span3'.$classextra);
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div id="footer-wrap">
        <div class="container">
            <footer id="page-footer">
                <div id="footer-info">
                    <img src="<?php echo $OUTPUT->pix_url('logo2', 'theme'); ?>" alt="Pediatric Logo">
                    <ul>
                        <li class="info-name"><strong>Pediatric Essentials</strong></li>
                        <li>123 First Street, New York, NY 10003 USA</li>
                        <li>Tel: <strong>123-456-7890</strong> | Email: <a href="#">info@youremail.com</a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>

    <footer id="page-footer2">
        <div class="footer-content container">
            <span id="copyright">&copy; Copyright 2014 Pediatric Essentials. All Rights Reserved.</span>
            <?php echo $OUTPUT->login_info() ?>
        </div>
    </footer>

    <?php echo $OUTPUT->standard_end_of_body_html() ?>

</body>
</html>