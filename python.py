from bs4 import BeautifulSoup
import urllib.request
response = urllib.request.urlopen('http://girlstory.kr')
page = response.read().decode( 'utf-8' , 'ignore' )
#print (page)
soup = BeautifulSoup(page , 'html5lib' )
#print (soup)
list=soup.findAll('td', attrs={'class' : 'title'})
for item in list:
      title = item.find('a').text
      print(title)
