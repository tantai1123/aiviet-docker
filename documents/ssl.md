# SSL Certificates
## 1. SSL, HTTPS and HTTP (What you should know)
### 1.1 What SSL Certificate:
SSL stands for Secure Sockets Layer and, in short, it's the standard technology for keeping an internet connection secure and safeguarding any sensitive data that is being sent between two systems, preventing criminals from reading and modifying any information transferred, including potential personal details.

- Triggers the "little padlock"/ greenbar
- Uses HTTPs for secure communication
Got: Data privacy and integrity
![alt text](https://www.hostinger.com/tutorials/wp-content/uploads/sites/2/2018/11/http-vs-https.png)

Certifies Content:
- Organization
- URL
- State, Country
- Valid date range
- Issuer

TLS (Transport Layer Security) is just an updated, more secure, version of SSL. We still refer to our security certificates as SSL because it is a more commonly used term, but when you are buying SSL from DigiCert you are actually buying the most up to date TLS certificates with the option of ECC, RSA or DSA encryption.
In sum up about SSL:
- Encrypt 
- Identity
### 1.2 What is a protocol?
A Protocol is a set of rules that we use for specific purposes. 
In the current scenario, when we are talking about protocols, it is about communication- the way we talk to each other. 
For instance, a newsreader speaks in English and because you understand English, you are able to understand. English is the protocol.

The moment the newsreader starts speaking in a language that you don't understand, the protocol beats its purpose. Thus, we need both the parties to agree to a set of rules for the communication to take place. The protocol, in this case, is for communication.

Multiple protocols are used to communicate. Primarily for end users, the most important and visible protocols are HTTP and HTTPS. Though there are many other protocols as well, HTTP and HTTPS protocols cater to most of the population.

In case you’re worrying about how you’re going to replace your certificates before the upcoming deadlines, we want to remind everyone that certificates are not dependent on protocols. Protocols are determined by your server configuration, not the certificates. So fear not, you don’t have to rip and replace your entire certificate inventory to accommodate this change!
### 1.3 SSL Handshake 
- Browser -> Secure Server
- Server -> SSL Certificate (includes: Public key & Identity)
- Browser -> Confirms SSL Certificate 
- Browser encrypts a very long password using the public key and sends it to the server
- Server decrypts data using its private key and retrieves the password 
- The server and browser both possess the same password
- They use the shared pass to encrypts all future communications with symmetric-key cryptography
(fast algorithms)

SSL Certificate cerfiles ownership of the public key
Public key is used to exchange a password in public

Password used for all encrypts: Temporary and not reused (it's a OTP) and
if contact the server again we will get new password
### 1.4 HTTPS:
Hypertext transfer protocol secure (HTTPS) is the secure version of HTTP, which is the primary protocol used to send data between a web browser and a website. HTTPS is encrypted in order to increase security of data transfer. This is particularly important when users transmit sensitive data, such as by logging into a bank account, email service, or health insurance provider.

Any website, especially those that require login credentials, should use HTTPS. In modern web browsers such as Chrome, websites that do not use HTTPS are marked differently than those that are. Look for a green padlock in the URL bar to signify the webpage is secure. Web browsers take HTTPS seriously.

HTTPS appears in the URL when a website is secured by an SSL certificate. The details of the certificate, including the issuing authority and the corporate name of the website owner, can be viewed by clicking on the lock symbol on the browser bar.


### 1.5 HSTS Installation for NGINX 
This goes in your site.conf file and I have created a modified gist with additional security parameters. 

`add_header Strict-Transport-Security 'max-age=300; includeSubDomains; preload; always;'`

In the course of my research for NGIX settings, I discovered a government website giving out incorrect information and provided the necessary code change that forces HSTS no matter what the HTTP response code returns. 



Government USA: https://https.cio.gov/hsts/

Git: https://github.com/GSA/https

## 2. Choose a Certificate:
### 2.1 Certificate Authorities (CAs)
A certificate authority (CA), also sometimes referred to as a certification authority, is a company or organization that acts to validate the identities of entities (such as websites, email addresses, companies, or individual persons) and bind them to cryptographic keys through the issuance of electronic documents known as digital certificates. A digital certificate provides:

- Authentication, by serving as a credential to validate the identity of the entity that it is issued to.
- Encryption, for secure communication over insecure networks such as the Internet.
- Integrity of documents signed with the certificate so that they cannot be altered by a third party in transit.

![alt text](https://cdn.ssl.com/wp-content/uploads/2019/07/ca-diagram-b.png)
### 2.2 Free certificate with Let's Encrypt
- Let' Encrypt
- https://letencrypt.org
- Nonprofit organization promoting adoption of HTTPS
- Free certificates that are easy to set up
- Valid for 90s days, auto-renewable
### 2.3 Self-signed certificates
- Certificates which have not been approved by a CA
- Allow encryption
- No third-party trust
- Browsers will display a security alert
- Useful when systems trust each other and need encryption
### 2.4 Certificate types
#### Domain Scopes
- Single (www.saigontech.com)
- Wildcard (*.)
- Multi-domain 
- Unified Communications/ Subject Alternative Name
#### Validation Levels
- Domain Validation
- Organization Validation
- Extended Validation
If your goal is encrypt or to prevent browsers from complaining, pick domain validation.

If your goal is to provide the highest reassurance to customers, pick extended validation.
### 2.5 Install a Certificate with Let's Encrypt (Certbot)
#### Certbot
- https://certbot.eff.org
- Developed by Electronic Frontier Foundation (EFF)
- Client for Let's Encrypt
- Python client using ACME protocol
- Automatic Certificate Management Environment
#### Benefit SSL Certificates:
- Ensures the identity of a remote computer
- Proves your identity to a remote computer
- Protects e-mail messages
- Ensures software came from software publisher
- Protects software from alteration after publication
- Allows data to be signed with the current time
- Allows data on disk to be encrypted
- Allows secure communication on the Internet
- All issuance policies
#### What you need to install:
- Working website
- Registration domain name
- Comfortable with command line/hosting providers
#### Demo:
https://youtu.be/YXRbdoGviTY
## 3. Renew a SSL
### 3.1 Let's Encrypt
Certbot used to be called letsencrypt more than one year ago. They are the same program. Both forms are still supported but we are trying to encourage people to refer to certbot, which is the new name. Depending on how people installed the program, the appropriate command for them to run might be certbot-auto or certbot. Wherever you see documentation referring to any of these forms, you should substitute the appropriate one for your system. The result of choosing the wrong one would just be a “command not found” error.

` sudo certbot renew`

`// Unix cron job`

` 0 */12 * * * certbot -q renew` (set time auto renew)

The recommended way to renew certificates is certbot renew, which ideally should be run automatically at least once per day, normally using cron.

Certbot renew checks all of the certificates that you’ve obtained and tries to renew any that will expire in less than 30 days.

If you do want to renew a specific certificate manually, you can use certbot certonly --force-renew and specify all of the associated domain names with -d.

As an alternative to specifying all of the names, you can run certbot certificates to find out which certificates you have and what their names are, and then specify the certificate’s name with --cert-name

### 3.2 Purchased Certificate:
Technically, when you renew a certificate, you are purchasing a new certificate for the domain and company. Industry standards require Certificate Authorities to hard code the expiration date into the certificates. When a certificate expires, it is no longer valid and there is no way to extend its life. So, when you "renew" your certificate, DigiCert must issue a new one to replace the expiring one, and you must install the new certificate on your server.

## 4. Reference: 
- https://www.websecurity.digicert.com/security-topics/what-is-ssl-tls-https
- https://mona.media/chung-chi-ssl-la-gi-cac-loai-ssl-certificate/
- https://cloud.google.com/load-balancing/docs/ssl-certificates/
- https://www.digicert.com/legal-repository/
- https://www.hostinger.vn/huong-dan/hosting-la-gi-giai-thich-web-hosting-cho-nguoi-moi-bat-dau/
- https://www.globalsign.com/en/blog/what-is-hsts-and-how-do-i-use-it
- https://www.cloudflare.com/learning/ssl/what-is-ssl/
- https://www.cloudflare.com/learning/ssl/transport-layer-security-tls/
- https://www.cloudflare.com/learning/ssl/why-use-https/
- https://www.netsparker.com/blog/web-security/http-strict-transport-security-hsts/
- https://hstspreload.org/
- https://globalsign.ssllabs.com/