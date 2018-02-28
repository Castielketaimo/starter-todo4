# Changelog

## Rules

* Team membership:  CL-Castiel Li (Captain), JL-Justin Leung (teammate)
* Team conventions: Allman notation, markdown for changelog  
* Changelog Format: Read from newest to oldest

## Version 2.0

### New components
-------------------------------------------------------------------------------------------------
#### Feb 28, 2018
* Added oneitemx -CL
* Added item Added view -CL
* Added Pagination -JL
* Added "completion of work" to the Homepage -JL
* Added role controller -CL

### Updated components
* controller/Mtce (Display view based on role) -CL
* Controller/Mtce (Display the add new todo item)-CL
* Controller/Mtce (Shows results on page given a page value.) -JL
* views/itemlist.php (Added checkboxes and pagination links.) -JL
* application/config/constants.php (defined role of guest and owner) -CL
* views/menubar.php (Added roles in nav) -CL
* application/config/config.php (updated sessions to use file system) -CL
* application/config/autoload.php (Auto load the session) -CL
* Controller/Mtce (Made the role visible) -CL

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
