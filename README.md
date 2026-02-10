# Etiquettes
Cactus label creation
To manage crating pdf file with labels based on a flat text file
One just needs to compy with text file format using "|" separator

example 
214-037| P / Semis:Production Perso-Semis 029|Pediocactus-Pilocanthus paradinei|08/04/24 / Zone 5b : -26.1 à -23.3°C 
First field will be source for a QR Code and human readable ID
Second Field prints Vendor data
Third field is the Plant Name
and last Field is for additional information, here USDA Zone and Hardiness

There are two methods
## Web based 
this is html / php based
User just needs to upload csv file and script will create the pdf files with 40 labels/page

## Bash script
The bash script does exactly the same bunt is for command line usage but label layout is different:
- QRcode includes a link tp my web based database
- Name is printed with bigger font and bold
- Numering only includes plant ID
user issues the command with csv filename as argument
the script returns a pdf file names sortie_a.pdf

## Dependencies:
sudo apt install qrencode imagemagick 
## Paper used
My labels stay in the ports standing outside without shelter so I need some resistant paper and ink.
I made several tests:
### Inkjet, standard paper, laminated
It works but doesn(t stay for long since moisture enters in te paper and if not it is the UV that destroy the ink.
### 130µ polyester sheet on laser printer
This was the first test with this type of paper since it was the chepiest of this category but even if the 
result is excelent, resistant to moisture and UV I is too thin for my usage since I want to push them in the ground.
### 310µ polyester sheet on laser printer
Better stifness and reliable.
### 350µ polyester sheet on laser printer
This is my last choice since I received free sample from Novalith.com to test.
The labels are stiff enough to be pushed in earth,
they stay strait even after more than two years and more.
Even the QRCodes stay readable after more than two seasons.
So I leave the reference here: Novalith.com Paper ref# NLA4/LFM4.1 at an average price of 100€ shipping included.
Since I print 40 labels/sheet it gives a 0.025€/label which is acceptable for me.

