<div class="container">
  <div align="center">
    <h2>Oh no! An error has occured.</h2>
    <div class="alert alert-danger" role="alert"><span class="fa fa-warning"></span> {$error->getMessage()}</div>
    <p class="errorStmt">{$error->getDebugInfo()}</p>
    <pre align="left">{$stackTrace}</pre>
  </div>
</div>