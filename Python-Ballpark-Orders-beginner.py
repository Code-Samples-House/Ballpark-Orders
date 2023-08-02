order_string = input()
orders = order_string.split(" ")
total = 0
for order in orders:
    if order == 'Nachos' or order == 'Pizza':
        total = total + 6
    elif order == 'Cheeseburger':
        total = total + 10
    elif order == 'Water':
        total = total + 4
    else:
        total = total + 5
tax = total * 0.07
cost = total + tax
print(cost)
