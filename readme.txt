This is a Bicycle renting webapp.
To start the app, follow these steps:
1. Make sure you have MAMP installed on the system and the files are saved in 'C:/MAMP/htdocs' 
	(or wherever MAMP is installed, store the files in MAMP/htdocs, which is always a already exixting folder.)
2. Run the application 'MAMP' and start the servers.
3. Go to your web browser and type 'localhost' in the url bar.
4. You have reached the home page of web app. When prompted, give permissions to acces your camera to read a bar code.

Some more details:
a. The details will be stored in a file with the name 'csv_new_user.csv' which stores the barcode, the start date,
 the end date and a flag value which is either 0 or 1.
b. If the user is valid and should get a bicycle, the value in the file 'arduino' will become 1 and then the code 
 of 'servo' is uploaded in the arduino with proper connections to servo motor. Then one should run pythonserial to
 unlock the bicycle. The servo motor should go 180 degrees unlocking, wait for a few seconds, and then back to original
 position.