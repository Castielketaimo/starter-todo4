# Changelog

## Rules

* Team membership:  CL-Castiel Li (Captain), JL-Justin Leung (teammate)
* Team conventions: Allman notation, markdown for changelog  
* Changelog Format: Read from newest to oldest

## Version 2.0

### New components
-------------------------------------------------------------------------------------------------
#### Feb 28, 2018
* Added Pagination -JL

## Version 1.0

### New components
-------------------------------------------------------------------------------------------------
#### Feb 14, 2018
* Added mtce page -JL
* Added template_secondary.php -CL
* Added views/by_category.php -CL
* Added views/BY_priority.php -CL
* Added controllerViews.php -CL
* Added helpme view, data/jobs.md for displaying a help wanted page messsage. -JL
* Added table with last 5 tasks displayed on homepage. -JL
* Added tasks alert on homepage. -JL
* Added Tasks model, and autoloaded it in config/autoload. -JL
* Added changelog.md -CL

### Updated components
* config/config.php (updated the link Work) -CL
* core/MY_Controller.php (Passes template as a var instead function) -CL
* models/Tasks.php (added function getCategorizedTasks(), orderByCategory()) -CL
