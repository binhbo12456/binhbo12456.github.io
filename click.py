# import requests
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from selenium.webdriver.firefox.firefox_binary import FirefoxBinary
from selenium.webdriver.common.action_chains import ActionChains 
from threading import Thread
import time

# path of geckodriver
# https://github.com/mozilla/geckodriver/releases

driver = webdriver.Firefox(executable_path=r'/Users/galaxyplay/Desktop/crawl_shopee/geckodriver')

def crawl(url):
    driver.get(url)
    link = driver.find_element(By.XPATH, '//a[@data-pcu="http://giakhangreal.com.vn/"]')
    action = ActionChains(driver)
    try:
        action.click(on_element = link) 
        action.perform() 
        print("\n click roj nek hihi")
        print(link.get_attribute("data-rw"))
    except:
        print("click hok duoc huhu")

if __name__ == "__main__":
    url = "https://www.google.com/search?q=vista+riverside"

    # so lan muon click
    click = 10

    i = 1
    while i< click:
        try:
            crawl(url)
            time.sleep(5)
        except:
            print("the domain is ditme down")
        i+=1
    # crawl(url)
