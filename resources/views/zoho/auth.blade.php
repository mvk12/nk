<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoho Auth</title>

    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
    <h1>Zoho</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card title">Inicio de sesión con Zoho</h5>
                        <form action="https://accounts.zoho.com/oauth/v2/auth" method="GET" class="form">
                            <div class="form-group">
                                <label for="scope">SCOPE</label>
                                <input type="text" name="scope" id="scope" value="ZohoSubscriptions.fullaccess.all" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="client_id">CLIENT ID</label>
                                <input type="text" name="client_id" id="client_id" value="{{ config('services.zoho.client_id') }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="state">STATE</label>
                                <input type="text" class="form-control" name="state" id="state" value="Test from local - {{ date('r') }}">
                            </div>
                            <div class="form-group">
                                <label for="response_type">RESPONSE TYPE</label>
                                <input type="text" class="form-control" name="response_type" id="response_type" value="code" readonly="readonly">
                            </div>
                            <div class="form-group">
                                <label for="redirect_url">REDIRECT URL</label>
                                <input type="text" class="form-control" name="redirect_url" id="redirect_url" value="{{ config('app.url') }}/zohoauth/ok" readonly="readonly">
                            </div>
                            <div class="form-group">
                                <label for="access_type">ACCESS TYPE</label>
                                <input type="text" class="form-control" name="access_type" id="access_type" value="offline" readonly="readonly">
                            </div>
                            {{--
                            .form-group>(label[for=a]+input.form-control[name=a][id=a][value=b][readonly])
                            --}}
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>