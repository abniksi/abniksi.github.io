# Qaotle
Project designed around a made up Mexican fast-food restaurant. Used Bootstrap 4 to design and make everything responsive.

# Landing Page
<img width="639" alt="Screen Shot 2019-03-11 at 5 11 31 PM" src="https://user-images.githubusercontent.com/43426747/54161657-d84bcf80-4420-11e9-9052-e04258160d87.png">
<img width="634" alt="Screen Shot 2019-03-11 at 5 11 52 PM" src="https://user-images.githubusercontent.com/43426747/54161656-d6820c00-4420-11e9-8a20-5b3426324bd1.png">
Images from a tablet view. I used display flex on my title to center it. Justify content and align items helped me out with that. I made my title 100vh so that the title will display in the middle of the page. Probably not the best way and you have to scroll a decent amount to get to the bottom of the page. My background image for this page was clashing with my white font making it tough to read. I tried messing with the opacity for awhile but the opacity kept changing my font and my background image. I ended up finding a way to make my background opacity darker without changing my text opacity. The way was to change the background color of the class to background-color: rgba(0, 0, 0, .4); and then using a new CSS property I had never used before : background-blend-mode: darken; This allowed the background to look darker and make my text pop off the page still. Font awesome icons used. 

# About Us Page
Simple standard page. I used the vh display flex trick previously mentioned to center my title. Also used the opacity trick again that I used in my landing page. Copied Qdoba's mission statement for this fake about us description.

# Menu
<img width="1280" alt="Screen Shot 2019-03-11 at 5 01 30 PM" src="https://user-images.githubusercontent.com/43426747/54161312-c74e8e80-441f-11e9-9615-231acde5f742.png">
For the menu portion, I used the Bootstrap grid system to lay everything out. I had to add another div insie the Bootstrap col classes in order for my menu to look the way I wanted it to. Added simple transitions on hover to make the UX better.
