# 💼 AI Agentic Recruiter Suite — Job Description Generator

An enterprise-grade, high-fidelity AI workflow system designed to orchestrate professional organizational role blueprints. Powered by **Llama 3.1 (via Groq Cloud API)** on the backend.

---

<img width="1848" height="920" alt="job gen" src="https://github.com/user-attachments/assets/905681d7-7937-4be8-b178-839c1c716833" />


## 🛠️ Tech Stack & Architecture

### Frontend Terminal
* **Tailwind CSS Engine** (via CDN for rapid utility rendering)
* **Asynchronous AJAX Pipelines** (Fetch API used to handle stream triggers without page reloads)

### Backend Controller
* **PHP 8.x Core Engine**
* **Groq Cloud SDK / cURL Integration** (Orchestrating inference payloads with the `llama-3.1` structural LLM matrix)

---

## 📂 Project Directory Structure

```text
jobdesc.gen/
├── index.php          # Premium Studio Frontend Interface & AJAX Handler
├── process.php        # Backend Server Controller (Groq API Gateway Execution)
└── README.md          # Project Documentation Portal
```

## ⚙️ Quick Installation & Deployment
### 1. Prerequisites
Make sure you have a local PHP server environment installed:
XAMPP / WampServer / Laragon (Running Apache & PHP 8.0+)
A valid Groq API Key (Get it from the Groq Cloud Console)

### 2. Local Setup Setup
Clone or move this repository folder into your XAMPP server root:

```
Bash
   C:\xampp\htdocs\PROJECTS\jobdesc.gen
```

Open process.php in your code editor and inject your Groq API authentication credential wrapper:
```  
PHP
   $api_key = "YOUR_GROQ_API_KEY_HERE";
```

### 3. Running the Application
Fire up your Apache Module in XAMPP and open your browser to hit this exact server path:
```
Plaintext
http://localhost/PROJECTS/jobdesc.gen/index.php
```

## 📜 License
 Built with ⚡ by SHEZA, AI Agentic Workflow Developer.
