import qrcode
import os

def generate_qr_code(user_id, user_name, output_folder='qr_codes'):
    # Créez un dossier pour enregistrer les QR codes s'il n'existe pas
    if not os.path.exists(output_folder):
        os.makedirs(output_folder)
    
    qr_data = f"UserID: {user_id}, UserName: {user_name}"
    
    # Génération QR code
    qr = qrcode.QRCode(
        version=1,  # la taille du QR code
        error_correction=qrcode.constants.ERROR_CORRECT_L,
        box_size=10,  # Taille de chaque "bloc"
        border=4,
    )
    qr.add_data(qr_data)
    qr.make(fit=True)  # Ajuste la taille du QR code aux données

    # Création de l'image du QR code
    img = qr.make_image(fill='black', back_color='white')

    # Enregistrement du QR code avec un nom de fichier unique
    qr_code_filename = f"{output_folder}/user_{user_id}.png"
    img.save(qr_code_filename)

    print(f"QR code pour l'utilisateur {user_name} enregistré sous {qr_code_filename}")

# Exemple
users = [
    {"id": 1, "name": "Sofia"},
    {"id": 2, "name": "Mathis"},
    {"id": 3, "name": "Charline"}
]

for user in users:
    generate_qr_code(user['id'], user['name'])
