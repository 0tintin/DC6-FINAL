<script setup>
import Mylayout from '@/Layouts/MyLayout.vue';
import { Head } from '@inertiajs/vue3';

defineOptions({
  layout: Mylayout
});
</script>

<template>
    <div class="welcome h-[100vh] w-full px-10 py-10">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg h-full">
            <div class="hero-section">
                <div class="logo">Welcome!</div>
                <div class="content-in">
                    <h1>Be the employee who sets the bar high and exceeds it every time.</h1>
                    <a href="#">Join Our Team</a>
                </div>
                <!-- Social Media Buttons -->
                <div class="social-media-buttons">
                    <a href="https://www.instagram.com" class="social-media-button"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com" class="social-media-button"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.facebook.com" class="social-media-button"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.linkedin.com" class="social-media-button"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.welcome {
    background: whitesmoke;
}
body, html {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  height: 100vh;
  overflow: hidden;
}

/* Animation keyframes */
@keyframes slideInFromTop {
  0% {
    transform: translateY(-100%);
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}

/* Apply animation to the hero section and its contents */
.hero-section {
  display: flex;
  justify-content: right;
  align-items: center;
  height: 100%;
  width: 100%;
  background: linear-gradient(135deg, #f6d365 0%, #fda085 100%);
  position: relative;
  padding: 20px;
  animation: slideInFromTop 1s ease-out;
}

.content-in {
  text-align: center;
  margin-right: 90px;
  color: black;
  z-index: 1;
  animation: slideInFromTop 1.5s ease-out;
}

.content-in h1 {
  font-size: 3em;
  margin-bottom: 20px;
}

.content a {
  display: inline-block;
  margin-top: 20px;
  padding: 10px 20px;
  background-color: #fff;
  color: #333;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.content a:hover {
  background-color: #ddd;
}

.logo {
  position: absolute;
  top: 20px;
  left: 30px;
  font-size: 2em;
  font-weight: bold;
  color: rgb(0, 0, 0);
  z-index: 1;
  animation: slideInFromTop 2s ease-out;
}

.social-media-buttons {
  position: absolute;
  bottom: 50px;
  right: 100px;
  display: flex;
  align-items: center;
  gap: 15px;
  z-index: 1;
  animation: slideInFromTop 2.5s ease-out;
}

.social-media-buttons a {
  color: rgb(0, 0, 0);
  text-decoration: none;
  font-size: 1em;
  transition: color 0.3s ease;
}

.social-media-buttons a:hover {
  color: #000000;
}

.social-media-button {
  margin: 0 10px;
  padding: 10px;
  border-radius: 80%;
  color: rgb(0, 0, 0);
  font-size: 20px;
  transition: background-color 0.3s ease;
}

.social-media-button:hover {
  background-color: #ffffff;
}
</style>
