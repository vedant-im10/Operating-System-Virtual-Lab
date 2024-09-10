# OS Virtual Lab
This is an Operating System Virtual Lab. Here you'll be able to visualise and know how processes in your computers actually work.

# Lab Layout:
This visualiser is divided into __3 modules__:
- Disk Scheduling Algorithms
- Page Replacement Algorithms
- Scheduling Algorithms

# Host the site on your local server:
This site is written PHP, so take these steps to run this on your local server
1. Clone this Git repository on your computer or ensure that the code files exist on your device
2. If you're using a code editor, then in it's in-built terminal or on your computer's command prompt type the following command:

_(Before running this command, ensure you're in the right directory on your prompt)_
````
php -S localhost:4000
````

This command will host the server in your browser and now you can navigate through the lab.

# Navigating through the Lab:
On opening the site, there is a navigation bar to jump directly to the module you'd like to explore.

Suppose, you are in the Page Replacement Algorithms(PRA) module. After a brief description on PRAs, there is a navigation bar that lists all the algorithms implemented.

1. Select the algorithm you'd like to run from the list(suppose: FIFO)
2. Read through an overview of this algo and then enter data to visualise how it runs.
3. For running, in the __'Reference String'__ field, enter __space-separated integers__ (_example: `2 5 6 7 3`_)
4. In the __'Frames'__ field, enter a __single integer__ (_example: `4`_) which will be the number of frames the algorithm takes.
5. Click on __'Submit'__ button to see the result.
6. Now, you can see the result in the tabular form and also the __Pages, Frames, Hits, Faults, Hit Ratio and Miss Ratio__ data is available.

__Now you can navigate through the whole lab and implement any algorithm.__
