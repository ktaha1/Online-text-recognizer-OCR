# Online-text-recognizer-OCR
Online text recognizer -based on Tesseract-OCR engine- allows users to easily convert scanned documents, screenshots and photos into editable and searchable text, such as DOC, TXT or PDF. 

### Main page
![alt text](https://github.com/ktaha1/Online-text-recognizer-OCR/blob/master/demo-main.png)

### Result page: Displaying uploaded image
![alt text](https://github.com/ktaha1/Online-text-recognizer-OCR/blob/master/demo-result1.png)

### Result page: Displaying preprocessed image
![alt text](https://github.com/ktaha1/Online-text-recognizer-OCR/blob/master/demo-result2.png)

## files tree
* **index.php** : main page including the form for the input

* **bridge.php** : called when the user submit the form to the system. it uploads the image to the server and execute the python file from the Core component. finally, redirecting the user to the result page.

* **result.php** : the page file called by "bridge.php".

* **download.php** : responsible for download the result in different format. called from "result.php".

* **Container** : this folder is used to save the input/output file to make their accesibility easy by the component. It includes:
    1) original image
    2) image with fixed rotation
    3) output : txt, pdf and doc filse

* **Core** : represents the Core component.

* **vendor** : includes the packages related to the View component( bootstrap, jQuery...)


## System requirements

The main open sources used are: 

* **Tesseract-OCR engine**

https://github.com/tesseract-ocr/tesseract: This package contains the latest version 4 of the OCR engine “libtesseract” and a command line program “tesseract”. 

The next step after installing the engine is to set up the environment path to get recognized in python script. 

Get the data file for each language you want to include in the system from: https://github.com/tesseract-ocr/tessdata. 

Afterward, copy the data file inside “testdata” folder: :\......\Tesseract-OCR\tessdata.


* **Pytesseract**: python interface for Tesseract-OCR Engine. 

https://pypi.org/project/pytesseract/


* **Cv2**: python interface for OpenCV library. 

https://pypi.org/project/opencv-python/

### N.B:
To set up python in the web server in order to execute python script through php, you have to add the following lines in Apache configuration file **httpd.conf**:
```
Options +ExecCGI 
AddHandler cgi-script .py 
ScriptInterpreterSource Registry-Strict
```


for further information/question, feel free to email  at : itaha.kamil@gmail.com
