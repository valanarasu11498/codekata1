#include <stdio.h>

int main()
{
  int a,h,m,h1,h2,m1,m2,th,tm;
  scanf("%d%d",&h1,&m1);
  scanf("%d%d",&h2,&m2);
  if(h2>h1)
  {
      th=h1;
      h1=h2;
      h2=th;
      tm=m1;
      m1=m2;
      m2=tm;
  }
  h1=h1*60;
  h1=h1+m1;
  h2=h2*60;
  h2=h2+m2;
  a=h1-h2;
  h=a/60;
  m=a%60;
  printf("%d %d",h,m);
  return 0;
}
