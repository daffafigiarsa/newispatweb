@extends('admin.tools.main')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>

    </div>
    <div class="col-lg-8">
        <form method="POST" action="/admin/posts{{ $post->slug }}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    name="title" required autofocus value="{{ $post->title }}">

            </div>
            <div class="mb-3">
                <label for="name" class="form-label">name created</label>
                <input type="text" class="form-control form-select @error('name') is-invalid @enderror" id="name" name="name"
                    required autofocus value="{{ $post->name }}" >
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <select type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    required>
                    <option value="">---</option>
                    <option value="COMPANYPROFILE">COMPANY PROFILE</option>
                    <option value="COMPANYBOARDOFDIRECTORS">COMPANY BOARD OF DIRECTORS</option>
                    <option value="COMPANYVISION,MISSION&VALUES">COMPANY VISION, MISSION & VALUES</option>
                    <option value="COMPANYHIGHLIGHTS&ACHIEVEMENTSOVERVIEW">COMPANY HIGHLIGHTS & ACHIEVEMENTS OVERVIEW</option>
                    <option value="COMPANYKANCERTIFICATION">COMPANY KAN CERTIFICATION</option>
                    <option value="COMPANYJISCERTIFICATION">COMPANY JIS CERTIFICATION</option>
                    <option value="COMPANYSNICERTIFICATION">COMPANY SNI CERTIFICATION</option>
                    <option value="COMPANYSIRIMCERTIFICATION">COMPANY SIRIM CERTIFICATION</option>
                    <option value="COMPANYISOCERTIFICATION">COMPANY ISO CERTIFICATION</option>
                    <option value="COMPANYTKDNCERTIFICATION">COMPANY TKDN CERTIFICATION</option>
                    <option value="COMPANYGROUPVIDEO">COMPANY GROUP VIDEO</option>
                    <option value="COMPANYMANAGEMENTSYSTEM">COMPANY MANAGEMENT SYSTEM</option>
                    <option value="COMPANYSHE">COMPANY SHE</option>
                    <option value="PRODUCTHIGHCARBONSTEEL">COMPANY GROUP VIDEO</option>
                    <option value="PRODUCTLOWCARBONSTEEL">COMPANY GROUP VIDEO</option>
                    <option value="PRODUCTCOLDHEADINGQUALITYSTEEL">PRODUCT COLD HEADING QUALITY STEEL</option>
                    <option value="PRODUCTGENERALPURPOSE WR">PRODUCT GENERAL PURPOSE WR</option>
                    <option value="PRODUCTWELDINGELECTRODE">PRODUCT WELDING ELECTRODE</option>
                    <option value="PRODUCTPLAIN/DEFORMBAR">PRODUCT PLAIN / DEFORM BAR</option>
                    <option value="PRODUCTGENERALSTRUCTURE">PRODUCT GENERAL STRUCTURE</option>
                    <option value="PRODUCTNAILS&NAILWIRE">PRODUCT NAILS & NAIL WIRE</option>
                    <option value="PRODUCTSCRAPPROVIDER">PRODUCT SCRAP PROVIDER</option>
                    <option value="INDUSTRIALPROCESSFACILITAS">INDUSTRIAL PROCESS FACILITAS</option>
                    <option value="INDUSTRIALPROCESSFLOWCHARTOFSTEELMAKING">INDUSTRIAL PROCESS FLOWCHART OF STEEL MAKING</option>
                    <option value="INDUSTRIALPROCESSFLOWCHARTOFWIRERODROLING">INDUSTRIAL PROCESS FLOWCHART OF WIRE ROD ROLING</option>
                    <option value="INDUSTRIALPROCESSISPATPANCAPUTRAFACILITAS">INDUSTRIAL PROCESS ISPAT PANCA PUTRA FACILITAS</option>
                    <option value="INDUSTRIALPROCESSISPATBUKITBAJAFACILITAS">INDUSTRIAL PROCESS ISPAT BUKIT BAJA FACILITAS</option>
                    <option value="INDUSTRIALPROCESSISPATWIREPRODUCTSFACILITAS">INDUSTRIAL PROCESS ISPAT WIRE PRODUCTS FACILITAS</option>
                    <option value="SUBSIDIARIESPT.ISPATWIREPRODUCT">SUBSIDIARIES PT. ISPAT WIRE PRODUCT</option>
                    <option value="SUBSIDIARIESPT.ISPATPANCAPUTRA">SUBSIDIARIES PT. ISPAT PANCA PUTRA</option>
                    <option value="SUBSIDIARIESPT.ISPATBUKITBAJA">SUBSIDIARIES PT. ISPAT BUKIT BAJA</option>
                    <option value="ENVIRONMENT">ENVIRONMENT</option>
                    <option value="BROCHUREPT.ISPATINDO">BROCHURE PT. ISPAT INDO</option>
                    <option value="BROCHUREPT.ISPATWIREPRODUCT">BROCHURE PT. ISPAT WIRE PRODUCT</option>
                    <option value="BROCHUREPT.ISPATPANCAPUTRA">BROCHURE PT. ISPAT PANCA PUTRA</option>
                    <option value="BROCHUREPT.ISPATBUKITBAJA">BROCHURE PT. ISPAT BUKIT BAJA</option>
                    <option value="CAREERS">CAREERS</option>


                </select>
            </div>
            <div class="mb-3">
                <label for="summernote" class="form-label">Content</label>
                <textarea id="summernote" class="form-control" name="content" value= ""></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>

@endsection
