#!C:\Program Files\Python37\python.exe
# coding: utf-8

import os
import sys
sys.path.append('C:/Users/Taha/AppData/Roaming/Python/Python37/site-packages/')
import cv2 as cv
import numpy as np
import argparse
import cv2 as cv
import pytesseract

def dorotate(path):

        image = cv.imread(path)

        gray = cv.cvtColor(image, cv.COLOR_BGR2GRAY)
        gray = cv.bitwise_not(gray)

        th2 = cv.adaptiveThreshold(gray,255,cv.ADAPTIVE_THRESH_GAUSSIAN_C,cv.THRESH_BINARY,11,4)


        thresh = cv.threshold(gray, 0, 255, cv.THRESH_BINARY | cv.THRESH_OTSU)[1]

        coords = np.column_stack(np.where(thresh > 0))
        angle = cv.minAreaRect(coords)[-1]


        if angle < -45:
                angle = -(90 + angle)


        else:
                angle = -angle

        (h, w) = image.shape[:2]
        center = (w // 2, h // 2)
        M = cv.getRotationMatrix2D(center, angle, 1.0)
        rotated = cv.warpAffine(image, M, (w, h),
                flags=cv.INTER_CUBIC, borderMode=cv.BORDER_REPLICATE)


         
        # show the output image
        print("[INFO] angle: {:.3f}".format(angle))



        cv.imwrite('container/outputRotate.png',rotated)

        return;




