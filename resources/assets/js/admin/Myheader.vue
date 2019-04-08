<template>
<section class="hero is-link is-bold">
  <!-- Hero head: will stick at the top -->

    <nav class="navbar">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item">
            <img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Logo.png" alt="Logo">
          </a>
          <span class="navbar-burger burger" data-target="navbarMenuHeroA">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenuHeroA" class="navbar-menu">
          <div class="navbar-end">
            <router-link to="/paketsoal" class="navbar-item">Paket Soal</router-link>
            <router-link to="/pesan" class="navbar-item">Pesan</router-link>
            <router-link to="/universitas" class="navbar-item">Universitas</router-link>
            <span class="navbar-item">
              <a class="button is-link is-inverted">
                <span class="icon">
                  <i class="fa fa-sign-out"></i>
                </span>
                <span>Admin</span>
              </a>
            </span>
          </div>
        </div>
      </div>
    </nav>
</section>
<!--
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Logo.png" alt="SBM-Buddy: Free, open source, & modern place to learn" width="112" height="28">
    </a>

    <div class="navbar-menu is-active">
      <router-link to="/soal" class="navbar-item">Soal</router-link>
      <router-link to="/pesan" class="navbar-item">Pesan</router-link>
      <router-link to="/universitas" class="navbar-item">Universitas</router-link>
    </div>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-link">
            <strong>Log Out</strong>
          </a>
        </div>
      </div>
    </div>
</nav>
-->
</template>
