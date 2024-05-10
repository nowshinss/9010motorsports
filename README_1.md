# Tutorial

## This tutorial will demonstrate how to solve projectile motion problems with the library `projectile_motion`. For some background material, head to the bibliography.

For many questions, the angle needed may be in terms of degrees. However, the `projectile_motion` library uses the angle in radians, so we need to convert our angle from degrees into radians. For this, we use the `theta` function. For example, let us convert 180 degrees into radians using `theta`. We simply input the value of the angle, theta, in degrees, and it will return the value of the angle in radians.
```python  
>>> import projectile_motion
>>> projectile_motion.theta(theta_in_degrees=180)
3.141592653589793

```


Consider this problem:

A ball is kicked with an initial velocity of 12m/s at angle of 50° to the horizontal.
  
  1) What is the horizontal range of the projectile?
  2) What will be the maximum height of the ball?
 




To find how far the ball will go before hitting the ground, we start by importing the libraries:
  
```python  
>>> import projectile_motion
>>> import numpy as np

```



Then we use the function `calculate_range`, where u is the initial velocity of the projectile, theta is the angle of launch in radians, and g is the acceleration due to gravity, which is 9.81m/s^2. Therefore we input u as 12, theta using `theta` as above, and g as 9.81. 

```python
>>> projectile_motion.calculate_range(u=12, theta=projectile_motion.theta(theta_in_degrees=50), g=9.81)
14.455893622197548

```

This gives us 14.5 to one decimal place, in metres. 


To find the maximum height of the ball, we will use the function `calculate_maximum_height`, where again, u is the initial velocity of the projectile, g is the acceleration due to gravity which is 9.81m/s^2, and theta is the angle of launch in radians. 

```python
>>> projectile_motion.calculate_maximum_height(u=12, theta=projectile_motion.theta(theta_in_degrees=50), g=9.81)
4.306965789603414

```


This gives us 4.3 metres to the nearest decimal place.

To find the maximum range, we will use the `calculate_maximum_range` function. We will plug the initial velocity of 12m/s for u, 9.81m/s^2 for g, the acceleration due to gravity, and we will take theta to be π/4 radians, as this will give the maximum sin output in the formula of the function.

```python
>>> projectile_motion.calculate_maximum_range(u=12, theta=(np.pi/4), g=9.81)
14.678899082568806

```



Consider this problem: A ball is projected with initial velocity 20m/s at 50° to the horizontal plane. Find the time of flight.


We will use the function `calculate_time_of_flight` to find the answer, inputting u as 20m/s, g as 9.81m/s^2 and theta using `theta`.

```python
>>> projectile_motion.calculate_time_of_flight(u=20, theta=projectile_motion.theta(theta_in_degrees=50), g=9.81)
3.1235247425850274

```


We get 3.1 seconds to the nearest decimal place.

For the trajectory of the projectile, consider the question;
  
Ruwayda hits a ball with her bat at an initial velocity of 45 m/s in the air. In the ball's direction of travel, the end of the field is 140.0 m away.  If the initial angle at which the ball is hit is 66.4°, calculate the trajectory of the ball.


Next, we will use the function `calculate_trajectory` to find the trajectory of the projectile. We input u, the initial velocity, as 45, theta using `theta`, g as 9.81, and x, the horizontal component, as 140.

```python
>>> projectile_motion.calculate_trajectory(x=140, theta=projectile_motion.theta(theta_in_degrees=66.4), u=45, g=9.81)
24.242268335254607

```


Therefore, the trajectory is 24.2 metres to the first decimal place.  

The `projectile_motion` library also allows us to create a graph for the trajectory. This is done using the function `plot_trajectory` using three components; acceleration due to gravity taken to be 9.81m/s^2 , initial velocity given by u in m/s and theta which is the angle of launch in radians. 

Next we substitute the components into the function `plot_trajectory`.


```python
>>> projectile_motion.plot_trajectory(theta=projectile_motion.theta(theta_in_degrees=66.4), u=45, g=9.81)

```



![alt text](<plot of the trajectory of the particle.png>)




# How-to guides
### How to convert degrees into radians
Given an angle in degrees, we can obtain the corresponding angle in radians using the function `theta`. For example:

```python
>>> import projectile_motion
>>> projectile_motion.theta(theta_in_degrees=90)
1.5707963267948966

```


### How to compute the time of flight
Given the initial velocity, angle of launch and gravity, we can compute the time of flight using the `calculate_time_of_flight` function. For example:


```python
>>> import projectile_motion
>>> projectile_motion.calculate_time_of_flight(u= 20, theta=projectile_motion.theta(theta_in_degrees=45), g = 9.81)
2.8832080782326095

```


### How to compute the range of the projectile
Given the initial velocity, angle of launch and gravity, we can compute the range of the projectile using the `calculate_range_of_projectile` function. For example:

```python
>>> import projectile_motion
>>> projectile_motion.calculate_range(u = 10, theta=projectile_motion.theta(theta_in_degrees=20), g=9.81)
6.552371148690512

```


### How to compute the maximum height of the projectile
Given the initial velocity, angle of launch and gravity, we can compute the maximum height of the projectile using the `calculate_maximum_height` function. For example:

```python
>>> import projectile_motion
>>> projectile_motion.calculate_maximum_height(u = 10, theta=projectile_motion.theta(theta_in_degrees=45), g=9.81)
2.5484199796126394

```


### How to compute the maximum range of a projectile
Given the initial velocity, gravity and theta taken to be π/4 radians using the `calculate_maximum_range` function. For example:

```python
>>> import projectile_motion
>>> import numpy as np
>>> projectile_motion.calculate_maximum_range(u=30, theta=(np.pi/4), g=9.81)
91.74311926605505

```


### How to compute the trajectory of a projectile
Given the initial velocity, gravity and the horizontal component in metres. This can also be done using the `calculate_trajectory` function. For example:

```python
>>> import projectile_motion
>>> projectile_motion.calculate_trajectory(x=100, theta=projectile_motion.theta(theta_in_degrees=45), u=45, g=9.81)
51.55555555555555

```


### How to generate a graph which plots the trajectory of a projectile
Given the initial velocity in m/s, gravitational acceleration and the horizontal component in metres, we can plot the trajectory on a graph using the `plot_trajectory` function.


```python
>>> import projectile_motion
>>> projectile_motion.plot_trajectory(theta=projectile_motion.theta(theta_in_degrees=45), u=45, g=9.81)

```


![alt text][def]







# Explanations
Projectile motion is an important concept in applied mathematics and physics that focuses on the nature of any object thrown into the air, and how gravity impacts this. 

### Examples of projectile motion
There are many scenarios in which you will encounter projectile motion. One example is whenever we throw our keys on top of our drawers as soon as we enter our home. Another very common one used in many questions is kicking a ball from the ground, and studying its motion whilst it is in the air. With any example, there are many things you need to consider, that will affect the overall motion of the object.

### The assumptions of projectile motions
- The acceleration is always constant for projectile motion, however for this, the acceleration due to gravity, g, will have a magnitude of 9.81 m/s^2, in the direction towards the Earth. 
- The motion of the object is symmetrical along the path of the curve.
- The effect due to spin and rotation of the earth is insignificant.
- There is no air resistance affecting the journey.

### The relationship between velocity and acceleration
The velocity of a projectile motion journey is consistently noticeable along the trajectory, and whenever the path bends, the velocity continuously shifts.
Acceleration of the object is always constant in both magnitude and displacement.
As one of the assumptions of projectile motion is that air resistance does not impact the journey, gravity must then be the only force acting on the object, with acceleration being constant.

### Two-dimensional motion

The projectile's velocity can be broken down into the horizontal and vertical components, which are perpendicular to each other.

In projectile motion, the horizontal and vertical components of the journey are considered independently, but occur simultaneously. This is known as the principle of physical independence of motions.

Horizontal motion is constant. Acceleration is responsible for altering velocity. When acceleration in a specific direction is zero, velocity in that direction remains constant. Therefore, during projectile motion, the horizontal velocity component remains consistent throughout the trajectory. 

The gravitational force consistently influences the vertical component, resulting in uniformly accelerated vertical motion.

## Derivations

`projectile_motion` uses formulae derived from standard SUVAT equations. Here is an explanation into how each formula used is derived.

### How to derive the time of flight 
We start by considering the SUVAT equation $s = ut + \frac{1}{2}at ^ 2$, where $s$ is the displacement in metres, $u$ is the initial velocity in metres per second, $a$ is the acceleration in metres per second squared and $t$ represents the time in s. 

We will consider this equation vertically and set it to 0. We do this as the projectile will return to its initial position vertically, for example, when we throw a ball, it will return to the height we threw it at eventually.

We will substitute $usin(θ)$ into the equation in place of $u$, as $usin(θ)$ is the vertical component of $u$, obtained by decomposing $u$ into its vertical and horizontal components.

We will also substitute $-g$ in place of $a$, as 9.81m/^2 is the acceleration due to gravity, and we will take the positive direction to be upwards, hence the negative sign.

By doing this, we get: $0 = usin(θ)t - \frac{1}{2}gt ^ 2$. 

We then factor out $t$ to get $0 = t(usin(θ) - \frac{1}{2}gt)$. 

This then tells us that either $usin(θ) - \frac{1}{2}gt = 0$ or $t = 0$. However, $t = 0$ is the initial time, so we will consider the first equation.

Rearranging this equation for $t$ then gives us $t = \frac{2usin(θ)}{g}$, which is the equation used in the `calculate_time_of_flight` function.

### How to derive the range

We know that we use the formula $d = s\times t$ to calculate the distance, where $d$ is the distance, $s$ is the speed and $t$ is the time. In terms of vector quantities, this is $s = u\times t$, where $s$ is the displacement, or range, $u$ is the initial velocity and $t$ is the time of flight. This is the basis for the formula, so we will substitute the necessary components in.

The horizontal component of $u$ is $ucos(θ)$ and we take $t = \frac{2usin(θ)}{g}$, which is the formula for the time of flight as derived above. Doing this, we get $x = ucos(θ)\times \frac{2usin(θ)}{g}$, where $x$ represents the horizontal distance travelled.

Simplifying this, we get $x = \frac{2u ^ 2 sin(θ)cos(θ)}{g}$. This can be simplified further by using the trigonometric identity $sin(2θ) = 2sin(θ)cos(θ)$, and we get $x = \frac{u ^ 2 sin(2θ)}{g}$. This is the formula used in the `calculate_range` function.

### How to derive the maximum range

The formula for the maximum range is the same as the formula used to calculate the range, which is $x = \frac{u ^ 2 sin(2θ)}{g}$. 

To calculate the maximum range, $θ$ will be taken as $\frac{π}{4}$ radians, as $sin(2\times \frac{π}{4}) = 1$, which is the highest value $sin(2θ)$ can take.

### How to derive the maximum height 

The formula for the maximum height is derived from the SUVAT equation $v ^ 2 = u ^ 2 + 2as$. In this equation, $v$ represents the final velocity of the projectile, $u$ is the initial velocity of the projectile, $a$ is the acceleration and $s$ represents the displacement. We will consider this equation vertically and set $v$ to 0, as the velocity at the maximum height is 0.

The vertical component of $u$ is $usin(θ)$, so we will substitute this in the equation for $u$.

We will also substitute $-g$ in place of $a$, as 9.81m/^2 is the acceleration due to gravity, and we will take the positive direction to be upwards, hence the negative sign.

By completing these substitutions, we get: $0 = u ^ 2 \times sin ^ 2 (θ) - 2gy$, where $y$ is used instead of $s$ to represent the vertical height.

Rearranging for $y$, we get $y = \frac{u ^ 2 sin ^ 2 (θ)}{2g}$, which is the equation used in the `calculate_maximum_height` function.

### How to derive the trajectory 

We will consider the equation $s = u \times t$ horizontally, where $s$ is the displacement, $u$ is the initial velocity and $t$ is the time of flight of the projectile.

The horizontal component of $u$ is $ucos(θ)$, so substituting this into the above equation gives: $x = ucos(θ)t$, where $x$ is the horizontal component of $s$.

Rearranging this equation for $t$, we get $t = \frac{x}{ucos(θ)}$.

We will then consider the vertical component of $s$ using the SUVAT equation $s = ut + \frac{1}{2} at ^ 2$, where $s$ is the displacement, $u$ is the initial velocity, $t$ is the time of flight and $a$ is the acceleration of the projectile.

The vertical component of $u$ is $usin(θ)$, so we will substitute this into the SUVAT equation above. 

We will also substitute $-g$ in place of $a$, as 9.81m/^2 is the acceleration due to gravity, and we will take the positive direction to be upwards, hence the negative sign.

By substituting the necessary components, we get: $y = usin(θ)t - \frac{1}{2}gt ^ 2$. 

We will then substitute the equation for the time of flight which we derived earlier, giving us $y = \frac{usin(θ)x}{ucos(θ)} - \frac{1}{2}g \frac{x}{ucos(θ) ^ 2}$.

Simplifying this equation, we get $y = xtan(θ) - \frac{gx ^ 2}{2u ^ 2 cos ^ 2 (θ)}$, which is the equation for a projectile's trajectory and is used in the `calculate_trajectory` function.

# Reference
Here you will find the list of functionalities for the `projectile_motion` library. It consists of seven functions:
- `theta`
- `calculate_range`
- `calculate_maximum_height`
- `calculate_maximum_range`
- `calculate_time_of_flight`
- `calculate_trajectory`
- `plot_trajectory`

### Testing the software

To test the code:

```
$ python test_projectile_motion.py
```

To test the documentation:

```
$ python -m doctest README.md
```


# Bibliography
- For a summary on projectile motion and how it works, head to: https://physics.info/projectiles/
- For more information on SUVAT equations and their derivations, visit: https://www.savemyexams.com/a-level/maths_mechanics/aqa/18/revision-notes/2-kinematics/2-3-constant-acceleration---1d/2-3-1-deriving-the-suvat-formulae/ 
- For further explanation on the derivation of the projectile motion formulae, visit: https://www.nagwa.com/en/explainers/245124821718/ 







[def]: unknown.png