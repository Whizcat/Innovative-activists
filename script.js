function registerUser() {
    // Perform user registration logic here
    alert('User registered successfully!');
  }
  
  function loadBalanceOverview() {
    // Simulating fetching the balance from backend
    var balance = 1000;
  
    // Display the balance in the UI
    document.getElementById('balance').innerText = 'Current balance: $' + balance;
  }
  
  function loadCustomerSupport() {
    // Scroll to the customer support section
    document.getElementById('customer-support').scrollIntoView({ behavior: 'smooth' });
  }