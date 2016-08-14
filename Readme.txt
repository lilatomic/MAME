Readme

Thoughts on the recent work 11/08/2016

AboutUS:
the 3 3 3 4 grid looks off, 3 3 3 3 1 maybe? You dont want different sized tiles. on a subconcious level people will think less of those positions.

The image width should made the hover over width
still need a footer , something before the team and something after

ContactUS:
minimalism is nice, but its defintely missing something on this page
spice up your form a bit
look for some inspiration

DesignTeams:
I think duplicating the same style as your team makes this look tacky. There must be a better way of doing this
Find a vector of each of the vehicles if you can and play with the typography of each (we can talk about this) have the images/type link to their website , and below your design team title, explain what the design teams are/ what their connection is to mame and the EUS. why are they important, what do they have to do with mechanical engineering?


Home:
Looks dope, dont need the background image, would be cool if we could animate your cogs a bit (like the ones that make up the m part) and have the nav fade in. I dont think you want your news feed on your home page. Mame isnt an event, its an organization. You want to promote your organization. Maybe quick links to what mame is, and how people can find information
People can always go check your fb,twitter etc shit on their own. If they are coming to your site they want info, not the pictures of the recent pubcrawl mame hosted


Mentoring: 
whats with this page?

So as i understand it, is your heirachy

-home
-school calender
-overhead at mame blog?
-get involved
 - design teams
 - other involvement
-academic extras
  -mentoring
  -coursepacks
-contact-us

If i were trying to make sense of it, id do it this way.

---------------------------------------------------------------------------

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
