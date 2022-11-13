# http2clip
HTTP POST to Clipboard  
Using HTTP POST to send data to Windows local clipboard, run in WSL.

# Requrement
PHP and ngrok and ngrok account  
https://ngrok.com

# Usage
git clone https://github.com/pankpan/http2clip  
cd http2clip  
./start  
You'll see a ngrok Forwarding URL.  
Using HTTP POST to send data from anywhare.  
eg.  
curl -sd YOUR_DATA {ngrok_URL}  
YOUR_DATA will in clipboard.
