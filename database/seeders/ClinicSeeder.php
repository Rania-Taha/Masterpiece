<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this import statement


class ClinicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clinics')->insert([
            'name' => 'Treaty pet clinic',
            'image' => 'http://127.0.0.1:8000/assets/img/treaty.jpg',
            'location' => ' Al-youssefi Circle, Irbid',
            'description' =>'hi',
            'about' =>'Our team of veterinary professionals works together to ensure that your pet’s needs are provided for at all times. We prioritize your pet long-term health by focusing on preventive services. You will love our highly skilled, compassionate veterinarians. We offer a comprehensive range of services under one roof.',
            'location_map' =>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3363.9211595540446!2d35.8712270244412!3d32.528252573768576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c77d2c80b055b%3A0x31a19a00b823380e!2sTreaty%20pets%20clinic!5e0!3m2!1sar!2sjo!4v1696307711413!5m2!1sar!2sjo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            
        ]);
        DB::table('clinics')->insert([
            'name' => 'Pure eyes pets clinic',
            'image' => 'https://th.bing.com/th/id/OIP.qtt4pnz5ObBC7KwadyU2pAHaHe?pid=ImgDet&rs=1',
            'location' => 'Rateb Al-Battayenah Street, Irbid',
            'description' =>'hi',
            'about' =>'Our team of veterinary professionals works together to ensure that your pet’s needs are provided for at all times. We prioritize your pet long-term health by focusing on preventive services. You will love our highly skilled, compassionate veterinarians. We offer a comprehensive range of services under one roof.',
            'location_map' =>'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3363.175179156767!2d35.86231902444032!3d32.548169673760086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c7690094c2e6d%3A0xa25ad160dfbed70e!2zUHVyZSBFeWVzIC0gUGV0cyBDbGluaWMgLSDYqNmK2YrZiNixINij2YrYstiy!5e0!3m2!1sar!2sjo!4v1696307690099!5m2!1sar!2sjo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            
        ]);
    }
}
