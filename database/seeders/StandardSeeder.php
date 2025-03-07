<?php

namespace Database\Seeders;

use App\Models\Standard;
use Illuminate\Database\Seeder;

class StandardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Undergraduate Ministry Standards 1 - 6:
        //

        $ms = new Standard;
        $ms->standard_category_id = 1;
        $ms->s_shortphrase = 'Depth and Breadth of Knowledge';
        $ms->s_outcome = 'Knowledge and critical understanding in a field of study that builds upon the student\'s secondary education and includes the key assumptions, methodologies, and applications of the discipline and/or field of practice.
            Basic understanding of the range of fields within the discipline/field.
            Ability to gather, review, evaluate and interpret information, including new information relevant to the discipline.
            Capacity to engage in independent research or practice in a supervised context.
            Critical thinking/analytical skills.
            Ability to apply learning from one or more areas outside the discipline.';
        $ms->save();

        $ms2 = new Standard;
        $ms2->standard_category_id = 1;
        $ms2->s_shortphrase = 'Knowledge of Methodologies and Research';
        $ms2->s_outcome = 'An understanding of methods of inquiry or creative activity, or both, in their primary area of study that enables the students to evaluate the appropriateness of different approaches to solving problems using well established ideas and techniques.
        Devise and sustain arguments or solve problems using these methods.
        Describe and comment upon particular aspects of current research or equivalent advanced scholarship in the discipline.';
        $ms2->save();

        $ms3 = new Standard;
        $ms3->standard_category_id = 1;
        $ms3->s_shortphrase = 'Application of Knowledge';
        $ms3->s_outcome = 'The ability to review, present, and critically evaluate qualitative and quantitative information to: develop lines of argument; make sound judgments in accordance with the major theories, concepts, and methods of the subject(s) of study; apply underlying concepts, principles, and techniques of analysis, both within and outside the discipline; and where appropriate, use this knowledge in the creative process.
        The ability to use a range of established techniques to initiate and undertake critical evaluation of arguments, assumptions, abstract concepts, and information; propose solutions; frame appropriate questions for the purpose of solving a problem; and solve a problem or create a new work.
        The ability to make critical use of scholarly reviews and primary sources.';
        $ms3->save();

        $ms4 = new Standard;
        $ms4->standard_category_id = 1;
        $ms4->s_shortphrase = 'Communications Skills';
        $ms4->s_outcome = 'The ability to communicate information, arguments, and analyses accurately and reliably, orally and in writing, to a range of audiences, to specialist and non-specialist audiences, using structured and coherent arguments, and, where appropriate, informed by key concepts and techniques of the discipline.';
        $ms4->save();

        $ms5 = new Standard;
        $ms5->standard_category_id = 1;
        $ms5->s_shortphrase = 'Awareness of Limits of Knowledge';
        $ms5->s_outcome = 'Understanding of the limits to their own knowledge and ability.
        Appreciation of the uncertainty, ambiguity and limits to knowledge and how this might influence analyses and interpretations.';
        $ms5->save();

        $ms6 = new Standard;
        $ms6->standard_category_id = 1;
        $ms6->s_shortphrase = 'Professional Capacity/Autonomy';
        $ms6->s_outcome = 'Qualities and transferable skills necessary for further study, employment, community involvement, and other activities requiring:
        the exercise of initiative, personal responsibility and accountability in both personal
        and group contexts;
        working effectively with others; and,
        behaviour consistent with academic integrity.';
        $ms6->save();

        //
        // Masters Degree Ministry Standards 7 - 12:
        //

        $ms7 = new Standard;
        $ms7->standard_category_id = 2;
        $ms7->s_shortphrase = 'Depth and Breadth of Knowledge';
        $ms7->s_outcome = 'Systematic understanding of knowledge, and a critical awareness of current problems and/or new insights, much of which is at, or informed by, the forefront of their academic discipline, field of study, or area of professional practice.';
        $ms7->save();

        $ms8 = new Standard;
        $ms8->standard_category_id = 2;
        $ms8->s_shortphrase = 'Knowledge of Methodologies and Research';
        $ms8->s_outcome = 'A conceptual understanding and methodological competence that enables the graduate
        to have:
        a) working comprehension of how established techniques of research and inquiry are
        used to create and interpret knowledge in the discipline;
        b) capacity to evaluate critically current research and advanced research and
        scholarship in the discipline or area of professional competence; and,
        c) capacity to address complex issues and judgments based on established principles
        and techniques.
        On the basis of this competence, graduates are able to demonstrate:
        a) the development and support of a sustained argument in written form; and/or
        b) originality in the application of knowledge';
        $ms8->save();

        $ms9 = new Standard;
        $ms9->standard_category_id = 2;
        $ms9->s_shortphrase = 'Communications Skills';
        $ms9->s_outcome = 'Ability to communicate ideas, issues and conclusions clearly and effectively to specialist and non-specialist audiences.';
        $ms9->save();

        $ms10 = new Standard;
        $ms10->standard_category_id = 2;
        $ms10->s_shortphrase = 'Application of Knowledge';
        $ms10->s_outcome = 'Competency in the research process by applying an existing body of knowledge in the research and critical analysis of a new question or of a specific problem or issue in a new setting.';
        $ms10->save();

        $ms11 = new Standard;
        $ms11->standard_category_id = 2;
        $ms11->s_shortphrase = 'Awareness of Limits of Knowledge';
        $ms11->s_outcome = 'Cognizance of the complexity of knowledge and of the potential contributions of other interpretations, methods, and disciplines.';
        $ms11->save();

        $ms12 = new Standard;
        $ms12->standard_category_id = 2;
        $ms12->s_shortphrase = 'Professional Capacity/Autonomy';
        $ms12->s_outcome = 'a) The qualities and transferable skills necessary for employment requiring:
        • initiative, personal responsibility, and accountability; and,
        • decision-making in complex situations, such as employment.
        b) The intellectual independence required for continuing professional development.
        c) The ability to appreciate the broader implications of applying knowledge to
        particular contexts.';
        $ms12->save();

        //
        // Masters Degree Ministry Standards 13 - 18:
        //

        $ms13 = new Standard;
        $ms13->standard_category_id = 3;
        $ms13->s_shortphrase = 'Depth and Breadth of Knowledge';
        $ms13->s_outcome = 'Thorough understanding of a substantial body of knowledge that is at the forefront of their academic discipline or area of professional practice.';
        $ms13->save();

        $ms14 = new Standard;
        $ms14->standard_category_id = 3;
        $ms14->s_shortphrase = 'Knowledge of Methodologies and Research';
        $ms14->s_outcome = 'Conceptualize, design, and implement research for the generation of new knowledge, applications, or understanding at the forefront of the discipline, and to adjust the research design or methodology in the light of unforeseen problems.
        Make informed judgments on complex issues in specialist fields, sometimes requiring new methods.Produce original research, or other advanced scholarship, of a quality to satisfy peer review, and to merit publication.';
        $ms14->save();

        $ms16 = new Standard;
        $ms16->standard_category_id = 3;
        $ms16->s_shortphrase = 'Application of Knowledge';
        $ms16->s_outcome = 'Capacity to undertake pure and/or applied research at an advanced level.
        Capacity to contribute to the development of academic or professional skill, techniques, tools, practices, ideas, theories, approaches, and/or materials.';
        $ms16->save();

        $ms15 = new Standard;
        $ms15->standard_category_id = 3;
        $ms15->s_shortphrase = 'Communications Skills';
        $ms15->s_outcome = 'Ability to communicate complex and/or ambiguous ideas, issues and conclusions clearly and effectively.';
        $ms15->save();

        $ms17 = new Standard;
        $ms17->standard_category_id = 3;
        $ms17->s_shortphrase = 'Awareness of Limits of Knowledge';
        $ms17->s_outcome = 'Appreciation of the limitations of one\'s own work and discipline, of the complexity of knowledge, and of the potential contributions of other interpretations, methods, and disciplines.';
        $ms17->save();

        $ms18 = new Standard;
        $ms18->standard_category_id = 3;
        $ms18->s_shortphrase = 'Professional Capacity/Autonomy';
        $ms18->s_outcome = 'a) The qualities and transferable skills necessary for employment requiring the exercise of personal responsibility and largely autonomous initiative in complex situations.
        b) The intellectual independence to be academically and professionally engaged and current.
        c) The ability to evaluate the broader implications of applying knowledge to particular contexts.';
        $ms18->save();
    }
}
