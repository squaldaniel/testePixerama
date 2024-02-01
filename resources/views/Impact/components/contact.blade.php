    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>Contato</h2>
            <p>Estamos ansiosos para entrar em contato com você, mas antes precisammos de algumas informações</p>
          </div>

          <div class="row gx-lg-0 gy-4">

            <div class="col-lg-4">

              <div class="info-container d-flex flex-column align-items-center justify-content-center">
                <div class="info-item d-flex">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                    <h4>Localização:</h4>
                    <p>A108 Av. das Flores, Gramado, SC 89636-000</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="bi bi-envelope flex-shrink-0"></i>
                  <div>
                    <h4>Email:</h4>
                    <p>contato@meucrm.com</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="bi bi-phone flex-shrink-0"></i>
                  <div>
                    <h4>Fone:</h4>
                    <p>+55 11 95361-0234</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="bi bi-clock flex-shrink-0"></i>
                  <div>
                    <h4>Horário de atendimento:</h4>
                    <p>seg-Sab: 09AM - 19PM</p>
                  </div>
                </div><!-- End Info Item -->
              </div>

            </div>

            <div class="col-lg-8">
              <form action="/forms/contact/" method="post" role="form" class="php-email-form">
                @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Seu nome" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="seu emai" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
                </div>
                <div class="form-group mt-3">
                    <select class="form-control" name="plan">
                        <option>Qual o Plano?</option>
                        <option value="free">Gratis</option>
                        <option value="business">Business Plan</option>
                        <option value="developer">Developer Plan</option>
                    </select>
                  </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="4" placeholder="Mensagem" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Carregando</div>
                  <div class="error-message"></div>
                </div>
                <div class="text-center"><button type="submit">Enviar mensagem</button></div>
              </form>
            </div><!-- End Contact Form -->

          </div>

        </div>
      </section>
      <!-- End Contact Section -->
