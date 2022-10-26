import numpy as np
import cv2

img = cv2.imread('file/color_ball.jpg')

cv2.imshow('Image', img)

print(type(img))
print(img.shape)
img = cv2.cvtColor(img, cv2.COLOR_BGR2HSV)

print(img[133,237,:])
print(img[188,466,:])
print(img[343,160,:])

while(True):
    if cv2.waitKey(1) & 0xff == ord('1'):
        break