<?php

namespace Database\Seeders;

use App\Models\Vulnerability;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $oswap_2021 = [
            [
                'title' => 'Broken Access Control',
                'description' => "Access control enforces policy such that users cannot act outside of their intended permissions. Failures typically lead to unauthorized information disclosure, modification, or destruction of all data or performing a business function outside the user's limits",
                'url' => 'https://owasp.org/Top10/A01_2021-Broken_Access_Control/',
            ],
            [
                'title' => 'Cryptographic Failures',
                'description' => "The first thing is to determine the protection needs of data in transit and at rest. For example, passwords, credit card numbers, health records, personal information, and business secrets require extra protection, mainly if that data falls under privacy laws, e.g., EU's General Data Protection Regulation (GDPR), or regulations, e.g., financial data protection such as PCI Data Security Standard (PCI DSS).",
                'url' => 'https://owasp.org/Top10/A02_2021-Cryptographic_Failures/',
            ],
            [
                'title' => 'Injection',
                'description' => "Some of the more common injections are SQL, NoSQL, OS command, Object Relational Mapping (ORM), LDAP, and Expression Language (EL) or Object Graph Navigation Library (OGNL) injection. The concept is identical among all interpreters. Source code review is the best method of detecting if applications are vulnerable to injections. Automated testing of all parameters, headers, URL, cookies, JSON, SOAP, and XML data inputs is strongly encouraged. Organizations can include static (SAST), dynamic (DAST), and interactive (IAST) application security testing tools into the CI/CD pipeline to identify introduced injection flaws before production deployment.",
                'url' => 'https://owasp.org/Top10/A03_2021-Injection/',
            ],
            [
                'title' => 'Insecure Design',
                'description' => "Insecure design is a broad category representing different weaknesses, expressed as “missing or ineffective control design.” Insecure design is not the source for all other Top 10 risk categories. There is a difference between insecure design and insecure implementation. We differentiate between design flaws and implementation defects for a reason, they have different root causes and remediation. A secure design can still have implementation defects leading to vulnerabilities that may be exploited. An insecure design cannot be fixed by a perfect implementation as by definition, needed security controls were never created to defend against specific attacks. One of the factors that contribute to insecure design is the lack of business risk profiling inherent in the software or system being developed, and thus the failure to determine what level of security design is required.",
                'url' => 'https://owasp.org/Top10/A04_2021-Insecure_Design/',
            ],
            [
                'title' => 'Security Misconfiguration',
                'description' => "The application might be vulnerable if the application is:
                        Missing appropriate security hardening across any part of the application stack or improperly configured permissions on cloud services.

                        Unnecessary features are enabled or installed (e.g., unnecessary ports, services, pages, accounts, or privileges).

                        Default accounts and their passwords are still enabled and unchanged.

                        Error handling reveals stack traces or other overly informative error messages to users.

                        For upgraded systems, the latest security features are disabled or not configured securely.

                        The security settings in the application servers, application frameworks (e.g., Struts, Spring, ASP.NET), libraries, databases, etc., are not set to secure values.

                        The server does not send security headers or directives, or they are not set to secure values.

                        The software is out of date or vulnerable (see A06:2021-Vulnerable and Outdated Components).
                    Without a concerted, repeatable application security configuration process, systems are at a higher risk.",
                'url' => 'https://owasp.org/Top10/A02_2021-Cryptographic_Failures/',
            ],
            [
                'title' => 'Vulnerable and Outdated Components ',
                'description' => "You are likely vulnerable:
                    If you do not know the versions of all components you use (both client-side and server-side). This includes components you directly use as well as nested dependencies.

                    If the software is vulnerable, unsupported, or out of date. This includes the OS, web/application server, database management system (DBMS), applications, APIs and all components, runtime environments, and libraries.

                    If you do not scan for vulnerabilities regularly and subscribe to security bulletins related to the components you use.

                    If you do not fix or upgrade the underlying platform, frameworks, and dependencies in a risk-based, timely fashion. This commonly happens in environments when patching is a monthly or quarterly task under change control, leaving organizations open to days or months of unnecessary exposure to fixed vulnerabilities.

                    If software developers do not test the compatibility of updated, upgraded, or patched libraries.

                    If you do not secure the components’ configurations (see A05:2021-Security Misconfiguration).",
                'url' => 'https://owasp.org/Top10/A06_2021-Vulnerable_and_Outdated_Components/',
            ],
            [
                'title' => 'Identification and Authentication Failures ',
                'description' => "Confirmation of the user's identity, authentication, and session management is critical to protect against authentication-related attacks. There may be authentication weaknesses if the application:
                    Permits automated attacks such as credential stuffing, where the attacker has a list of valid usernames and passwords.

                    Permits brute force or other automated attacks.

                    Permits default, weak, or well-known passwords, such as \"Password1\" or \"admin/admin\".

                    Uses weak or ineffective credential recovery and forgot-password processes, such as \"knowledge-based answers,\" which cannot be made safe.

                    Uses plain text, encrypted, or weakly hashed passwords data stores (see A02:2021-Cryptographic Failures).

                    Has missing or ineffective multi-factor authentication.

                    Exposes session identifier in the URL.

                    Reuse session identifier after successful login.

                    Does not correctly invalidate Session IDs. User sessions or authentication tokens (mainly single sign-on (SSO) tokens) aren't properly invalidated during logout or a period of inactivity.",
                'url' => 'https://owasp.org/Top10/A07_2021-Identification_and_Authentication_Failures/',
            ],
            [
                'title' => 'Software and Data Integrity Failures',
                'description' => "Software and data integrity failures relate to code and infrastructure that does not protect against integrity violations. An example of this is where an application relies upon plugins, libraries, or modules from untrusted sources, repositories, and content delivery networks (CDNs). An insecure CI/CD pipeline can introduce the potential for unauthorized access, malicious code, or system compromise. Lastly, many applications now include auto-update functionality, where updates are downloaded without sufficient integrity verification and applied to the previously trusted application. Attackers could potentially upload their own updates to be distributed and run on all installations. Another example is where objects or data are encoded or serialized into a structure that an attacker can see and modify is vulnerable to insecure deserialization.",
                'url' => 'https://owasp.org/Top10/A08_2021-Software_and_Data_Integrity_Failures/',
            ],
            [
                'title' => 'Security Logging and Monitoring Failures ',
                'description' => "Returning to the OWASP Top 10 2021, this category is to help detect, escalate, and respond to active breaches. Without logging and monitoring, breaches cannot be detected. Insufficient logging, detection, monitoring, and active response occurs any time:
                        Auditable events, such as logins, failed logins, and high-value transactions, are not logged.

                        Warnings and errors generate no, inadequate, or unclear log messages.

                        Logs of applications and APIs are not monitored for suspicious activity.

                        Logs are only stored locally.

                        Appropriate alerting thresholds and response escalation processes are not in place or effective.

                        Penetration testing and scans by dynamic application security testing (DAST) tools (such as OWASP ZAP) do not trigger alerts.

                        The application cannot detect, escalate, or alert for active attacks in real-time or near real-time.

                    You are vulnerable to information leakage by making logging and alerting events visible to a user or an attacker (see A01:2021-Broken Access Control).",
                'url' => 'https://owasp.org/Top10/A09_2021-Security_Logging_and_Monitoring_Failures/',
            ],
            [
                'title' => 'Server-Side Request Forgery (SSRF)',
                'description' => "SSRF flaws occur whenever a web application is fetching a remote resource without validating the user-supplied URL. It allows an attacker to coerce the application to send a crafted request to an unexpected destination, even when protected by a firewall, VPN, or another type of network access control list (ACL).

                    As modern web applications provide end-users with convenient features, fetching a URL becomes a common scenario. As a result, the incidence of SSRF is increasing. Also, the severity of SSRF is becoming higher due to cloud services and the complexity of architectures.",
                'url' => 'https://owasp.org/Top10/A02_2021-Cryptographic_Failures/',
            ]
        ];
        foreach ($oswap_2021 as $vul) {
            Vulnerability::create($vul);
        }

        Vulnerability::factory()->count(1000)->create();
    }
}
