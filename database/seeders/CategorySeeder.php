<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('categories')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        // Category::create([
        //     'name' => 'Category 1',
        //     'icon' => 'admin/category/icon_1624111111.png',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore',
        // ]);

        $categorises = [
            [
                "name" => "Thyroid",
                'icon' => 'admin/category/Thyroid.png',
                "description" => "A balanced diet, exercise, and stress management support thyroid health. Regular check-ups detect issues early. Thyroid regulates metabolism, and imbalances cause weight changes and fatigue. Stay proactive for well-being."
            ],
            [
                "name" => "Diabetes & Kidney",
                'icon' => 'admin/category/Diabetes_Kidney.png',
                "description" => "The Diabetes & Kidney package is designed for individuals managing diabetes and kidney issues. It includes tests like fasting blood sugar, HbA1c, and kidney function tests such as serum creatinine and urine microalbumin."
            ],
            [
                "name" => "Heart & Hypertension",
                'icon' => 'admin/category/Heart_Hypertension.png',
                "description" => "The Heart & Hypertension package monitors heart health and blood pressure with tests like lipid profile, ECG, and BP measurement. It helps in early detection, ideal for those at risk of heart disease."
            ],
            [
                "name" => "Cancer",
                'icon' => 'admin/category/Cancer.png',
                "description" => "Early detection is vital for cancer management. Our Cancer package screens for common cancers, detecting specific blood markers. Regular screening benefits those with family history or exposure to risk factors."
            ],
            [
                "name" => "Joint Pain & Bone Health",
                'icon' => 'admin/category/Joint_Pain_Bone_Health.png',
                "description" => "Maintaining bone health and managing joint pain is crucial. Our package includes tests for calcium, vitamin D, and rheumatoid factor. Regular screening aids in diagnosing osteoporosis and arthritis, especially for at-risk individuals."
            ],
            [
                "name" => "Liver, Jaundice and Hepatitis",
                'icon' => 'admin/category/Liver_Jaundice_Hepatitis.jpg',
                "description" => "Our Liver, Jaundice, and Hepatitis package includes LFTs, bilirubin, and hepatitis markers. Regular screening detects liver conditions early, crucial for those with liver disease history or symptoms like jaundice and abdominal pain."
            ],
            [
                "name" => "Pregnancy Time?",
                'icon' => 'admin/category/Pregnancy_Time.png',
                "description" => "Our Pregnancy package includes tests like complete blood count, blood glucose, and infection screening. These help monitor the health of mother and baby, ensuring timely interventions for a safe pregnancy journey."
            ],
            [
                "name" => "Infertility",
                'icon' => 'admin/category/Infertility.png',
                "description" => "The Infertility package offers tests for both men and women to identify causes of infertility, such as hormonal imbalances and structural issues, enabling effective treatment and increasing chances of conception."
            ],
            [
                "name" => "Hormonal Imbalance?",
                'icon' => 'admin/category/Hormonal_Imbalance.png',
                "description" => "The Hormonal Imbalance package includes tests for key hormones like estrogen, testosterone, cortisol, and thyroid hormones. Early detection can help manage symptoms like weight gain, fatigue, mood swings, and irregular menstrual cycles. Ideal for those with symptoms or on hormone replacement therapy."
            ],
            [
                "name" => "Vitamins",
                'icon' => 'admin/category/Vitamins.png',
                "description" => "The Vitamins package tests for essential vitamins like D, B12, and folate. Deficiencies can cause fatigue, weakened immunity, and bone issues. Early detection helps with dietary adjustments and supplementation. Ideal for those with deficiency symptoms or on restrictive diets."
            ],
            [
                "name" => "Child Special",
                'icon' => 'admin/category/Child_Special.jpeg',
                "description" => "The Child Special package monitors children's health and development with tests like complete blood count, blood glucose, and screenings for common conditions. Regular check-ups ensure early detection and management of issues affecting growth. Ideal for parents wanting to ensure their children meet health milestones."
            ],
            [
                "name" => "Male Special",
                'icon' => 'admin/category/Male_Special.png',
                "description" => "The Child Special package monitors children's health and development with tests like complete blood count, blood glucose, and screenings for common conditions. Regular check-ups ensure early detection and management of growth issues. Ideal for parents wanting to ensure their children meet health milestones."
            ],
            [
                "name" => "Female Special",
                'icon' => 'admin/category/Female_Special.png',
                "description" => "The Female Special package addresses women's unique health needs with tests like mammograms, Pap smears, and hormonal assessments. Regular screenings are crucial for early detection of breast cancer, cervical cancer, and hormonal imbalances. This package offers a comprehensive health overview, enabling timely interventions. Ideal for women of all ages to maintain their health and well-being."
            ],
            [
                "name" => "Senior Male Special",
                'icon' => 'admin/category/Senior_Male_Special.png',
                "description" => "The Senior Male Special package addresses health concerns of older men with tests like PSA, lipid profile, and bone density. Regular screenings ensure early detection and management of prostate cancer, heart disease, and osteoporosis. This comprehensive health assessment helps senior men maintain their health and quality of life. Ideal for men over 50 taking a proactive approach to their health."
            ],
            [
                "name" => "Senior Female Special",
                'icon' => 'admin/category/Senior_Female_Special.png',
                "description" => "The Senior Female Special package addresses the health needs of older women. It includes tests such as mammograms, bone density tests, and lipid profile. Regular health check-ups are crucial for early detection and management of conditions like osteoporosis, breast cancer, and cardiovascular diseases. This package provides a comprehensive overview of a senior woman's health, allowing for timely interventions and management of health issues. It is ideal for women over 50 who want to ensure they are maintaining their health and well-being."
            ],
            [
                "name" => "Fever",
                'icon' => 'admin/category/Fever.png',
                "description" => "The Fever package diagnoses and manages the causes of fever with tests like complete blood count, blood culture, and urine analysis. Fever can indicate various conditions, including infections and inflammatory diseases. Early identification is crucial for effective treatment. This package offers a comprehensive assessment, ensuring prompt and appropriate medical care."
            ],
            [
                "name" => "Allergy",
                'icon' => 'admin/category/Allergy.jpg',
                "description" => "The Allergy package identifies common allergens like pollen, dust mites, and food allergens that impact quality of life with symptoms such as sneezing and respiratory issues. Understanding triggers aids in symptom management and avoidance. This package assesses allergies comprehensively, facilitating effective treatment and management. Ideal for those with symptoms or family history of allergies."
            ],
            [
                "name" => "Alcoholism",
                'icon' => 'admin/category/Alcoholism.png',
                "description" => "The Alcoholism package includes tests to assess liver function, complete blood count, and screen for alcohol-related conditions. Regular monitoring aids in early detection and management of alcohol's health impacts, crucial for those who drink regularly or show symptoms of related issues. This package provides a thorough assessment of alcohol's effects, enabling timely interventions for better health outcomes."
            ],
            [
                "name" => "Smoking",
                'icon' => 'admin/category/Smoking.png',
                "description" => "The Smoking package includes tests to assess lung function, complete blood count, and screen for smoking-related conditions. Regular monitoring aids in early detection and management of smoking's health impacts, essential for smokers or those showing related symptoms. This package offers a comprehensive assessment of smoking's effects, facilitating timely interventions and management for better health outcomes."
            ],
            [
                "name" => "Stress/Anger",
                'icon' => 'admin/category/Stress_Anger.jpg',
                "description" => "The Stress/Anger package includes tests to assess stress hormone levels, complete blood count, and screenings for stress-related conditions. Managing stress and anger is vital for overall well-being. This package offers a thorough assessment of their health impacts, enabling effective management and interventions. Ideal for individuals with high stress or anger levels, or with a family history of stress-related issues."
            ],
            [
                "name" => "Anaemia",
                'icon' => 'admin/category/Anaemia.png',
                "description" => "The Anaemia package includes tests such as complete blood count, iron studies, and vitamin B12 levels to detect and manage the condition characterized by low red blood cells, causing fatigue and weakness. Regular monitoring aids in early detection and treatment, ensuring effective management. Ideal for those with symptoms or a family history of anaemia, this package offers a comprehensive assessment for better health outcomes."
            ],
            [
                "name" => "STD",
                'icon' => 'admin/category/STD.png',
                "description" => "The STD package includes tests to screen for common STDs like HIV, syphilis, gonorrhea, and chlamydia, essential for early detection and management. Regular testing ensures prompt treatment, safeguarding sexual health. This comprehensive assessment is ideal for sexually active individuals or those with STD symptoms, facilitating effective management and treatment for better health outcomes."
            ]
        ];

        foreach ($categorises as $categoriy) {
            Category::create([
                'name' => $categoriy['name'],
                'icon' => $categoriy['icon'],
                'description' => $categoriy['description'],
            ]);
        }
    }
}
