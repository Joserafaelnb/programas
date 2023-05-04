weight  = 41.5
cost_ground = 0
#Ground Shipping
if weight <= 2:
 cost_ground = weight * 1.50 + 20
if weight > 2 and weight <= 6:
  cost_ground = weight * 3.00 + 20
if weight > 6 and weight <= 10:
  cost_ground =weight * 4.00 + 20
if weight > 10 :
  cost_ground = weight * 4.75 + 20

cost_premium_ground = 125.00

#Drone Shipping
if weight <= 2:
 cost_drone = weight * 4.50 
if weight > 2 and weight <= 6:
  cost_drone = weight * 9.00
if weight > 6 and weight <= 10:
  cost_drone = weight * 12.00
if weight > 10 :
  cost_drone = weight * 14.25


print(cost_ground)
print(cost_premium_ground)
print(cost_drone)