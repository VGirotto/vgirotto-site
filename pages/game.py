# Just a code to practice programming in python
import random


# change the size of the map
sizeLin = 20
sizeCol = 40

# change the initial position
initPosX = 0
initPosY = 1

# change the target position
endPosX = sizeLin - 2
endPosY = sizeCol - 1

graph = {}  # matriz for the graph
gameMap = []

def graphInit():    # inicia a matriz de adjacencia e o mapa
    for i in range(sizeLin):
        line = []   # create the line
        for j in range(sizeCol):
            line.append(False)  # create the column

            #graph 
            graph[str(i) + ',' + str(j)] = {"wall": False, "end": False, "init": False, "mark": False, "path": False, 
                                            "adj" : [str(i) + ',' + str(j+1), str(i+1) + ',' + str(j),
                                            str(i) + ',' + str(j-1), str(i-1) + ',' + str(j)]}
        
        gameMap.append(line) 

def generateMap():  #randomly generate a map, marking the walls
    for i in range(sizeLin):
        for j in range(sizeCol):
            fill = random.randint(0, 2) # 25% chance of be a wall
            if fill == 1:
                gameMap[i][j] = True
                graph[str(i) + ',' + str(j)]["wall"] = True

    gameMap[endPosX][endPosY] = "end"
    graph[str(endPosX) + ',' + str(endPosY)]["end"] = True
    gameMap[initPosX][initPosY] = "init"

def drawMap():
    for i in range(sizeLin):
        for j in range(sizeCol):
            if gameMap[i][j] == "path":
                print("o")
            elif gameMap[i][j] == True:
                print("#")
            elif gameMap[i][j] == False:
                print("_")
            elif gameMap[i][j] == "init":
                print("*")
            elif gameMap[i][j] == "end":
                print("$")
        print("<br />")


def searchPath(pair):
    # look to 4 directions searching for a empty cell
    # if encounter, move to the cell and look again
    # if don't encounter, back to the previous cell
    # when encounter the end, return cell by cell marking as path
    # if don't encounter the end and already checked all next cells, return False
    graph[pair]["mark"] = True
    for value in graph[pair]["adj"]:
        if value in graph:

            if graph[value]["end"] == True:
                graph[pair]["path"] = True
                return True

            elif graph[value]["wall"] == False and graph[value]["mark"] == False:
                fim = searchPath(value)   # recursion searching the end

                if fim:
                    graph[pair]["path"] = True
                    return True
    return False

def definePath():   # just add the path to the gameMap
    for i in range(sizeLin):
        for j in range(sizeCol):
            if graph[str(i) + ',' + str(j)]["path"]:
                gameMap[i][j] = "path"
    gameMap[initPosX][initPosY] = "init"
    


graphInit() # initiate the map
generateMap()

drawMap()
if searchPath(str(initPosX) + ',' + str(initPosY)):
    print("<br /><b>There is</b> a path to the end <br /><br />")
    definePath()
    drawMap()
else:
    print("<br /><b>There isn't</b> a path to the end <br />")
