<?php echo $bootstrap->addJumbotron(LANG_dashboard_heading, LANG_dashboard_paragraph); ?>
<?php echo $bootstrap->addCardCol("start"); ?>
<?php echo $bootstrap->addWidget(LANG_DASHBOARD_WIDGET_01_heading, LANG_DASHBOARD_WIDGET_01_content); ?>
<?php echo $bootstrap->addWidget(LANG_DASHBOARD_WIDGET_02_heading, LANG_DASHBOARD_WIDGET_02_content . $dashboard->getWeather()); ?>
<?php echo $bootstrap->addWidget(LANG_DASHBOARD_WIDGET_03_heading, $dashboard->getFact()); ?>
<?php echo $bootstrap->addWidget(LANG_DASHBOARD_WIDGET_04_heading, LANG_DASHBOARD_WIDGET_04_content . $dashboard->getNumberOfNotes()); ?>
<?php echo $bootstrap->addWidget(LANG_DASHBOARD_WIDGET_05_heading, $dashboard->getRandomJokeAboutProgramming()); ?>
<?php echo $bootstrap->addWidget(LANG_DASHBOARD_WIDGET_06_heading, $dashboard->getLocation()); ?>
<?php echo $bootstrap->addCardCol("end"); ?>