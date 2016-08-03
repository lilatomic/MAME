Readme

So I figured it would help if i explained all the changes i made, where these files are now and just why i did what i did

1. Version control
Where are these files? This website, amoung many other is a git reposisitory service website. Git is a way to
version control text (and recently any sort of file) such that you can always track the history of a file and 
the changes made to it. In the software industry version control is one of the most important tools and lessons
you will need to learn and be comfortable with. Along side a text editor, version control is integral to your
workflow as a developer. Anyways, for this point forward we will be versioning our work. I will step you through
how to do this, but figured a little intro would be nice

2. Folder structure
You'll notice i split the website into a specific structure. All css in one folder, all js in another and the html at the root
diectory. This is on purpose lol, at any time, if you were to look for a specifc piece of media for your site, whether
that be an image or a javascript file you know EXACTLY where to start looking

3. File Names and Naming convention
TODO

4. Code Review

I will start reviewing your code by simply creating a commented version of one of your files. In the future i will use this 
git repo webite's review tools as it lends it self to better readability

a. About US

So first thing i did, was remove some redundancies. I noticed you had alot of similar chunks of code used for the profile sections, and you were seperating them off into sub classes like presidentPic, and financePic etc. This wasnt needed. I instead attack the sub elements of the general case, and use this for all the profile. If i REALLY wanted one profile to work in a different way, i would tack on an id, and effect it that way.

Second this was removing some wrappers, so instead of having 
TODO: need to finish

b. main.css

Once i cleaned up the html file a bit, i deleted a chunk of the css. The good part about the deleting is now, there is less to read through when trying to figure out what effects what. Although initially it is easier to effect certain elements by tacking on an id or class to them, once you have pages full of elements, it becomes hell trying tp parse through all of it.

Other formatting things i did was decrease the seperators to 80 chars, although it isnt so much a standard anymore with all the different sized screens people use to develop it, it looks relatively clean. 

c. Design Teams
TODO
