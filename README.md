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

