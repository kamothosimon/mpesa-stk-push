# STK Push Request

This repository contains a PHP script for initiating a Safaricom M-Pesa STK Push request. This script is designed to be integrated into a web application for processing payments.

## Usage

1. Ensure that you have the necessary permissions and credentials from Safaricom for making M-Pesa transactions.

2. Modify the script to include your specific parameters such as BusinessShortCode, Password, and Authorization token.

3. Integrate this script into your web application where you collect user input such as phone number, email, and amount to be paid.

4. Upon receiving the form data, invoke this script to initiate the STK Push request to Safaricom's API.

5. Safaricom will process the request, and upon completion, the response will be echoed back to your application.

## Script Explanation

- **$phoneNumber:** Variable to hold the phone number provided by the user initiating the payment.
- **$email:** Variable to hold the email provided by the user. (Currently not used in the script)
- **$amount:** Variable to hold the amount to be paid provided by the user.
- **$data:** Array containing the parameters required for initiating the STK Push request.
- **$json_data:** JSON representation of the data array.
- **cURL Request:** Using cURL library to send the HTTP POST request to Safaricom's API with the JSON data.
- **Response:** The response from the API is echoed back to the application.

## Important Notes

- This script is configured to work with Safaricom's sandbox environment. Ensure that you switch to the production environment and use real credentials when deploying in a live environment.
- Implement proper error handling and security measures as per your application requirements.
- Review Safaricom's documentation for detailed information on STK Push API and integration guidelines.

