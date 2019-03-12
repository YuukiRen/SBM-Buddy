<template>
<section class="section">
  <div class="columns">
    <div class="column"></div>
    <div class="column is-half">
        <div class="control has-icons-left">
            <input class="input" type="text" placeholder="Search">
            <span class="icon is-small is-left">
                <i class="fa fa-search" aria-hidden="true"></i>
            </span>
        </div>
    </div>
    <div class="column">
        <a class="button is-primary">
            <span class="icon">
                  <i class="fa fa-plus"></i>
            </span>
            <span>Tambah Soal</span>
        </a>
    </div>
  </div>

  <table class="table is-hoverable is-fullwidth">
    <thead>
      <tr>
        <th><abbr title="Kode">Kode Paket</abbr></th>
        <th><abbr title="Tahun">Tahun</abbr></th>
        <th><abbr title="Dikerjakan">Solved</abbr></th>
        <th><abbr title="Terbaik">Best Score</abbr></th>
      </tr>
    </thead>
  
    <tbody>
      <tr>
        <th>A1819</th>
        <td>2018/2019</td>
        <td>237</td>
        <td>199</td>
      </tr>
      <tr>
        <th>B1819</th>
        <td>2018/2019</td>
        <td>152</td>
        <td>210</td>
      </tr>
    </tbody>
  </table>

  <nav class="pagination" role="navigation" aria-label="pagination">
    <a class="pagination-previous" title="This is the first page">Previous</a>
    <a class="pagination-next">Next page</a>
    <ul class="pagination-list">
      <li>
        <a class="pagination-link is-current" aria-label="Page 1" aria-current="page">1</a>
      </li>
      <li>
        <a class="pagination-link" aria-label="Goto page 2">2</a>
      </li>
      <li>
        <a class="pagination-link" aria-label="Goto page 3">3</a>
      </li>
    </ul>
  </nav>
</section>
</template>