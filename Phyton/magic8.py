import random

name =""
name = input("what is your name ?")

question =""
question = input("ask me a question that can be answered by yes or no: ")

answer = ""

random_number = random.randint(1,12)

#print(random_number)

if random_number == 1:
  answer = "Yes - definitely"
elif random_number == 2:
  answer = "It is decidedly so"
elif random_number == 3:
  answer = "Without a doubt"
elif random_number == 4:
  answer = "Reply hazy, try again"
elif random_number == 5:
  answer = "Ask again later"
elif random_number == 6:
  answer = "Better not tell you now"
elif random_number == 7:
  answer = "My sources say no"
elif random_number == 8:
  answer = "Outlook not so good"
elif random_number == 9:
  answer = "Very doubtful"
elif random_number == 10:
  answer = "try to ask me another question"
elif random_number == 11:
  answer = "i have no idea"
elif random_number == 12:
  answer = "maybe yes maybe no"
else:
  answer = "Error"

if name == "":
  print("Question: " + question)
else:
  print(name + " asks: "+ question)

if question == "":
  print("sorry you didn't ask a question")
else:
  print("Magic 8-Ball's answer: "+ answer)
