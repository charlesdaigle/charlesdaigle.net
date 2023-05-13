{"category": "project", "dateCreated": "Dec 2019", "title": "Center For Design Installation", "tags": ["audio", "analog", "electronics", "hardware"], "desc": "Co-designed and built an interactive audio art installation.", "icon" : "fas fa-square"}

<article>
The full article can be read on the <a class="text-link" target="blank" href="https://medium.com/center-for-design/designing-experiences-shaping-futures-16c19a34738b">Center For Design Medium.</a>

## Overview
This project makes use of interactive granular synthesis performed on spoken word audio files.

The distance from an infrared sensor controls the "grain size" -- far from the sensor, the grain size is small (milliseconds) and generates an ambient sound. Closer to the sensor, the device plays a sentence describing the concept of "design".

The purpose of this installation is to trigger ambient sounds as people walk by the CFoD, and inspire them to walk closer, making the sentences increasingly clearer until the full sentence is read.

This installation was demonstrated at the Center For Design and at the Design Research Society Conference in Bilbao, Spain.

## Dataset
One day, my <a target="blank" class="text-link" href="https://toomuchidle.com/"> professor</a> of Embedded Audio Programming approached me and a colleague with a project to be done for the new Center For Design at Northeastern University. They had done a lexical analysis of design research papers, and they wanted us to find a way to interactively sonify this data.

Their goal was to figure out what words are most commonly associated with "design." Predictably, many words like "human", "intentional", "society" had lots of hits --

##### so we wanted to find a way to capture the essence of these words in sound.

We had the original researchers record themselves saying some sentences constructed mostly of the "best" words from this dataset. These audio files served as the basis.

## Hardware
The <a class="text-link" target="blank" href="https://bela.io/">Bela </a>embedded audio platform uses a BeagleBone Black board to continuously run a DSP backend that reads sensor inputs, maps them to software parameters, and the audiostream outputs to a simple 20W amplifier that drives 8ohm actuators on the windows. These window actuators are used to eliminate the need for a bulky, obtrusive speaker system -- it makes the glass itself the speaker.

An emergency shutoff switch is installed in hardware to ensure that any unwanted behavior can safely be terminated.

## Software
Incoming infrared distance sensor inputs are mapped to "grain size" (durations) to play preset spoken word samples of about 5s each. This "window" semi-randomly skips around the sample, playing many small pieces of the original sample. A delay and reverb effect allow a smooth "soundscape" to form. 

The experience allows passers-by to become intrigued by the sounds, which form themselves into clear sentencecs as they walk closer. This symbolizes the CFoD's intent to probe the meaning of design, and allow the Northeastern community to become part of that goal.

</article>