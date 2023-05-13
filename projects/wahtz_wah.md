{"category": "project", "dateCreated": "Dec 2019", "title": "'Wahtz Wah' Pedal", "tags": ["audio", "analog", "electronics", "pedal", "hardware", "effects"], "desc": "Built and analyzed a wah-wah effect pedal.", "icon" : "fas fa-square"}

<article>
The Wahtz Wah is a special project to me -- it was the first challenging electronics project I finished. 

I was still an undergraduate physics major, but I found myself asking the same question about my coursework:
###### *What can I build with this knowledge?*

I found that I was usually the only one in a class to wonder about application rather than pure theory. So to sate my curiosity, I dove headfirst into putting together a wah-wah guitar effect pedal kit. I distinctly remember my Physics of Electronics professor telling me I wouldn't be able to do it -- this really just fueled my drive to prove it to myself. Thankfully, since the project was so broad, I was able to submit it for my Intro to Music Technology class as well.

## Beginning the Project
The first issue I ran into was the original kit was discontinued. Having no prior experience sourcing parts, I nearly quit as I felt I would never be able to find all the right ones. I made some phone calls to the company that ships the kit, found their suppliers, and sourced parts from them. 

One issue was the inductor -- wah pedals need these very specific inductors that provide the right Q-factor and tuning to keep their effect audible in the 20Hz-20kHz range. I had to call <a href="https://www.jimdunlop.com/products/electronics/dunlop-electronics/" target="blank" class="text-link">Dunlop Manufacturing</a> and ask about their wah-wah inductors. 

The other issue was very important -- the aluminum housing and the rack-and-pinion potentiometer that spins via foot actuation. This I had to really dig, as the manufacturer was nowhere to be found. I finally found some limited stock of the exact parts available after a long week of Googling.  

Eventually, I sourced all the parts I needed to assemble this kit, save for some replacement parts that I guessed would work. 

## Learning to Solder
In preparation for the project, I bought a cheap Amazon soldering kit. It smelled of metal and burnt plastic. I headed to the garage with my mini-baggies of components, some safety goggles, and plenty of trepidation. The concept of soldering is not exactly appealing -- melting hot lead until it vaporizes does not sound safe in the slightest.

I began to solder, and I found myself getting into a solid rhythm with it. I tried to start with the least important solder joints first to practice, and then as I got better, I resoldered some of the bad joints. It was meditative -- in a few hours, cautious patience took me from bags of parts to an ugly but ready-to-test product. 

I plugged it in, and... 
###### *nothing*.

I was pretty sad at first, but I knew this was part of the process. My lab class had taught me that electronics rarely behave on the first try.

## Troubleshooting
I had tried everything -- resoldering contacts, trying it without power, 

About a week before the project was due, I brought it to <a href="https://toomuchidle.com/" target="blank" class="text-link">Professor Zappi's</a> office. He is extremely helpful when it comes to troubleshooting, and ensures that the reason behind every step is understood. We got out a DC operating point troubleshooting diagram, and he used his multimeter to check the node voltages. 

Finally, after an hour of this, he simply looks down at one of the transistors in the circuit, and sees that the base terminal is shorted to the case! He simply snipped the lead and suddenly, we had output sound! That said, the sound wasn't correct...

After bringing it home to my dorm, I wanted to finish it up so badly. It was Friday, so I invited some friends over to hang out for a bit before going to a party. I checked my build against the diagram over and over -- and finally, after another move of a ground-shorted terminal, I immediately heard the amplified jangle of the guitar's strings in my lap. Me and my friends rejoiced, and while it was working, shot a video:

<div class="embed-wrapper video">
<iframe width="560" height="315" src="https://www.youtube.com/embed/_ots0_vwc_s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>

</article>