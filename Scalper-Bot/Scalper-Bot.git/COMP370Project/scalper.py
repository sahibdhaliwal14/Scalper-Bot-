from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
import time 

import pymysql

# database connection
connection = pymysql.connect(host="localhost", user="root", passwd="", database="comp370")
cursor = connection.cursor()

cursor.execute("SELECT size FROM orderinfo")

mySize = cursor.fetchone()


cursor.execute("SELECT colour FROM orderinfo")

myColour = cursor.fetchone()


cursor.execute("SELECT address FROM shipping")

myAddress = cursor.fetchone()



cursor.execute("SELECT city FROM shipping")

myCity = cursor.fetchone()


cursor.execute("SELECT province FROM shipping")

myProv = cursor.fetchone()



cursor.execute("SELECT country FROM shipping")

myCountry = cursor.fetchone()


cursor.execute("SELECT postalCode FROM shipping")

myPCode = cursor.fetchone()


cursor.execute("SELECT creditCardNumber FROM payment")

myCCNum = cursor.fetchone()


cursor.execute("SELECT cardName FROM payment")

myCardName = cursor.fetchone()


cursor.execute("SELECT CCV FROM payment")

myCCV = cursor.fetchone()


cursor.execute("SELECT EXPDate FROM payment")

myExpDate = cursor.fetchone()



cursor.execute("SELECT cardType FROM payment")

myCardType = cursor.fetchone()



cursor.execute("SELECT name FROM user")

myName = cursor.fetchone()

cursor.execute("SELECT email FROM user")

myEmail = cursor.fetchone()








connection.close()




browser  = webdriver.Chrome(ChromeDriverManager().install())
# ======= Setting =============
# Your Facebook credentials

# =============================
# Open the Website
browser.get('https://localhost/fakeShoeStore/order.php')
time.sleep(10)

# click on item picture
#browser.find_element(By.NAME, "size").send_keys(mySize)
#time.sleep(5)

#browser.find_element(By.ID("//img[@id='shoe']")).click();

#time.sleep(5)

# =============================
# Enter shipping details
browser.find_element(By.NAME, "fname").send_keys(myName)

browser.find_element(By.NAME, "country").send_keys(myCountry)

browser.find_element(By.NAME, "houseadd").send_keys(myAddress)

browser.find_element(By.NAME, "city").send_keys(myCity)

browser.find_element(By.NAME, "state").send_keys(myProv)

browser.find_element(By.NAME, "zip").send_keys(myPCode)
time.sleep(2)

browser.find_element(By.ID, "pay").click();




time.sleep(3)


#Enter payment details

browser.find_element(By.NAME, "cardName").send_keys(myCardName)

browser.find_element(By.NAME, "CCNum").send_keys(myCCNum)

browser.find_element(By.NAME, "CCV").send_keys(myCCV)

browser.find_element(By.NAME, "expDate").send_keys(myExpDate)

browser.find_element(By.NAME, "cardType").send_keys(myCardType)
time.sleep(2)





#browser.find_element(By.ID, "button").click();
browser.find_element(By.ID, "order").click();
time.sleep(10)





