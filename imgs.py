filename="D:\\imgs.txt"
randimgs=open(filename,"a")
for numbers in range(1,74):
    randimgs.write("https://cdn.jsdelivr.net/gh/1718638143/img@master/img/"+str(numbers)+".png\n")
randimgs.close()