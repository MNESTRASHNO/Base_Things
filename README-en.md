# My Project

Welcome to My Project! Please choose your language:

- [Русский](README.md), [English](README-en.md)

# Incident Investigation Workshop

## For RTU MIREA Students

In this workshop focused on incident investigation, you will take on the role of a detective to understand how attackers gained access to the target machine.

## A Bit of Backstory

We have been asked to find out how a group of attackers gained access to our target machine. To achieve this, we will conduct our own investigation and attack on the machine to understand exactly what happened.

## What You Will Need:
- A virtual machine where you will deploy the website
- `nmap` and `gobuster`

## Workshop Summary

The goal of this kill chain is to introduce students to basic tools and methods for penetration testing. During the workshop, we will cover the following stages:

### 1. Information Gathering

As we are employees who are deeply investigating the incident, we have been provided with some necessary data, such as the IP address of the target machine. Key tools for information gathering will include:

- **`nmap`** for network scanning

### 2. Scanning

In this phase, we will use tools for scanning and vulnerability detection:

- **`nmap`** for port and service scanning
- **`gobuster`** for discovering hidden directories and files on the web server

### 3. Exploitation

We will focus on exploiting vulnerabilities such as:

- **SQL Injection** — a vulnerability in web applications that allows manipulation of the database

### 4. Privilege Escalation

In this stage, we will attempt to gain higher levels of access using methods such as:

- **`sudo -l`** for privilege checking
- Searching for and exploiting vulnerabilities to gain root access

### 5. Post-Exploitation

In the final stage, you will be able to:

- Steal secret information and perform other actions depending on your goals

## Conclusion

The workshop will provide you with practical skills and knowledge for penetration testing and incident investigation. Be sure to use the knowledge responsibly and ethically!

---

If you have any questions, feel free to reach out to the workshop organizers.

**Good luck and happy investigating!**
