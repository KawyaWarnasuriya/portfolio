// Firebase Firestore setup
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-app.js";
import { getFirestore, collection, addDoc } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-firestore.js";

// Firebase config
const firebaseConfig = {
  apiKey: "AIzaSyAyGt41FEwj3sKTrELEJuGHS0xpn12CeDU",
  authDomain: "portfolio-97f0b.firebaseapp.com",
  projectId: "portfolio-97f0b",
  storageBucket: "portfolio-97f0b.appspot.com", 
  messagingSenderId: "880634029161",
  appId: "1:880634029161:web:8edf0b7bf8c0536497eef8"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const db = getFirestore(app);

// Form submit
const contactForm = document.getElementById('contactForm');

contactForm.addEventListener('submit', async (e) => {
  e.preventDefault();

  const title = document.querySelector('input[name="title"]:checked')?.value || '';
  const name = document.getElementById('fullName').value.trim();
  const position = document.getElementById('position').value.trim();
  const mobile = document.getElementById('mobile').value.trim();
  const comments = document.getElementById('comments').value.trim();

  if (!title || !name || !position || !mobile || !comments) {
    alert("Please fill in all fields.");
    return;
  }

  try {
    await addDoc(collection(db, "commet"), {
      title,
      name,
      position,
      mobile,
      comments,
      timestamp: new Date().toISOString()
    });

    alert("Message sent successfully!");
    contactForm.reset();
  } catch (error) {
    alert("Error sending message: " + error.message);
  }
});
