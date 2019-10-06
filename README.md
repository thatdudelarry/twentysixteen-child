# Amply Child Theme

## Before we get down to the nitty gritty...

I'm going to continually build on this. Like, forever. 

___
*2. Include Font Awesome 4 by including this external stylesheet: https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css*
> Including the sheet wouldn't actually include the Font Awesome library (only the CSS directives) so I used the script that the Font Awesome website provided.
___

*3. Using WordPress hooks, actions, and/or filters, add the “fa-icon” Font Awesome icon before the author is displayed and add the “fa-calendar” Font Awesome icon before the publication date is displayed.*
> "fa-icon" doesn't appear to be an icon that is available with Font Awesome; "fa-smile" was used in its place.
___

*4. Provide a custom stylesheet within your child theme. Use that stylesheet to customize the appearance of your child theme. This is your chance to show off your CSS skillset! At the very minimum we would like you to:*
> Used the default stylesheet used for creating the child theme. Will use SASS to output the sheet.
___

*5. Apply a decorative border to images within posts.*
> Did a simple CMYK style offset. Amply provides information, it only makes sense that there would be callbacks to traditional printing.
___

*6. Change the color of the post titles.*
> I made them red.
___

*7. Modify unordered lists to use the "circle" bullet style.*
> https://youtu.be/n3TAEaTCJHg
___

*8. In a separate JS file within your child theme, add some custom JavaScript that displays some kind of alert or modal when a user has scrolled 500 pixels down the page. Once the alert has displayed once, it should not display again.*
> Alert! I used "sessionStorage" to prevent it from annoying you.
___

*9. Include a custom page template for a "Contact" page which includes a simple form to collect the user's name, email, and comment. (Submitting the form doesn't need to actually post the data anywhere.)*
> Made the page template, added the form, but the form doesn't do anything.
___

*10. Include a custom post template called "Post With Recommendations". It can look like the standard post template, but below the post it should include a heading of "Other Articles You May Enjoy" as well as links to the 4 most recent posts to the site. Be sure and provide some styling to that recommendations area as well. The template should be created in a way that allows writers to select your template from the "Template" dropdown in the "Post Attributes" section of the WordPress editor.*
> Made the post template and applied it to the "Hello, World." post.

