# Online-Shopping-Cart-Application

An Online Shopping Cart Application, where customers can buy products of their choice such as electronics gadgets,Food,Sports items etc.
This Project is completed under My Software engineering Lab in my 6th Semester of Btech..

Web Technologies Used (PHP, Mysql, Javascript, Jquery, Bootstrap)
Software Used For Running Apache and Mysql Server : XAMPPv3.2.2

Key Features:
1. Customer Authentication While Registering To the website as a guest user.

2. All types of Validations.

3. Mysqli real_escape_string used to escape special charaters in the string to use in sql statement.

4. Use of PHP Session Management.
   Sessions are a simple way to store data for individual users against a unique session ID. 
   This can be used to persist state information between page requests. 
   Session IDs are normally sent to the browser via session cookies and the ID is used to retrieve existing session data.

Missing Feature:
  PAYMENT GATEWAY FOR CART CHECKOUT(I'll add this feature later:) .)
  
To run the project:
1. Install Xampp from its official site(https://www.apachefriends.org/download.html)(latest release not must).
2. Start Xampp control panel.
3. In case if it is showing blocked ports or missing dependencies free your required port by searching it in cmd with netstat -a -n or
   Check it in Your task manager's Process tab. (Sometimes Skype also using port 80 So close skype when you are running Apache).
4. Save this Project Under your installed directory of XAMPP, in my case it is D:\xampp\htdocs\dashboard\shopping cart. (only works when you save in htdocs)
5. After successfully running apache and mysql server you have to add all the products with the given jpg names in your phpmyadmin database.
6. Then you can run the shopping Cart at localhost/dashboard/Shopping Cart/index.php ;).
   
