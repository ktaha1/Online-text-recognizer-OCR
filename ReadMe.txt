
*) index.php : main page including the form for the input

*) bridge.php : called when the user submit the form to the system. it uploads the image to the server and execute the python file from the Core component. finally, redirecting the user to the result page.


*) result.php : the page file called by "bridge.php".

*) download.php: responsible for download the result in different format. called from "result.php".

*) Container: this folder is used to save the input/output file to make their accesibility easy by the component. It includes :
	*original image
	*image with fixed rotation
	*output : txt, pdf and doc filse

*) Core: represents the Core component.

*) vendor: includes the packages related to the View component( bootstrap, jQuery...)