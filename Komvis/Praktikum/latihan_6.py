import numpy as np
import cv2
# img = cv2.imread('../file/color_ball.jpg')

#definisis video capture
vid = cv2.VideoCapture(0)
params = cv2.SimpleBlobDetector_Params()

params.minThreshold = 100
params.maxThreshold = 255

#filter by area
params.filterByArea = True
params.minArea = 500
params.maxArea = 250000

# cv2.imshow('Image Filter', img)

#filer by Circularity
params.filterByConvexity = True
params.minConvexity = 0.3

#filter by Inertia
params.filterByInertia = True
params.minInertiaRatio = 0.01

ver = (cv2.__version__).split('.')
if int(ver[0]) < 3:
    detector = cv2.SimpleBlobDetector(params)
else:
    detector = cv2.SimpleBlobDetector_create(params)

#define range of selected color in HSV
# #hijau
# lower_limit = np.array([50,50,50])
# upper_limit = np.array([105,255,255])
#biru
lower_limit = np.array([100,50,50])
upper_limit = np.array([210,255,255])
#https://www.google.com/url?sa=i&url=https%3A%2F%2Fstackoverflow.com%2Fquestions%2F21737613%2Fimage-of-hsv-color-wheel-for-opencv&psig=AOvVaw3fdhKpBSNGkIkKefBvyx88&ust=1666758936480000&source=images&cd=vfe&ved=0CA4QjhxqFwoTCMierITH-voCFQAAAAAdAAAAABAE

kernel = np.ones((5,5), np.uint8)
while(True):
    #capture the video frame
    #by frame
    _,im = vid.read()
    hsv = cv2.cvtColor(im, cv2.COLOR_BGR2HSV)

    #Tjreshold the HSV imate to get  blue colors
    mask = cv2.inRange(hsv, lower_limit, upper_limit)
    mask = cv2.morphologyEx(mask, cv2.MORPH_CLOSE, kernel)

    #Bitwise-AND mask and original image
    res = cv2.bitwise_and(im,im, mask = mask)

    cv2.imshow('res',res)

    #im3 
    keypoints = detector.detect(cv2.bitwise_not(mask))
    #imcv2 =
    im_with_keypoints = cv2.drawKeypoints(im, keypoints, np.array([]), (0,0,255), cv2.DRAW_MATCHES_FLAGS_DRAW_RICH_KEYPOINTS)

    #cv2.imshow()
    cv2.imshow("Detection", im_with_keypoints)

    #the 'q' button is set asthe
    #quittingbutton you may use any
    #desired button of your choice
    if cv2.waitKey(1) & 0xff == ord('q'):
        break


#after the loop relasethe cap object
vid.relase()
cv2.destrowAllWindows()


# img = cv2.imread('../file/color_ball.jpg')

# print('sodikin')

