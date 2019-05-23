#include<math.h>
#include<stdio.h>
#include<string.h>

int main()
{
   
    int n,i,r;
    scanf("%d",&n);
    for(i=1;i>-1;i++)
    {
     r=pow(2,i);
     if(n>=r)
     {
         i++;
     }
     else
     {
         printf("%d",r);
         return 0;
     }
    }
    return 0;
}
