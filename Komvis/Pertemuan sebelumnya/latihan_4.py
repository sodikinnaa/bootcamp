import numpy as np
import cv2

img = cv2.imread('file/color_ball.jpg')

cv2.imshow('Image Original', img)

for y in range(img.shape[0]):
    for x in range(img.shape[1]):
        if img[y,x,0] > 180 and *umg[,,] >

cv2.imshow('Image Filter', img)

while(True):
    if cv2.waitKey(1) & 0xff == ord('1'):
        break